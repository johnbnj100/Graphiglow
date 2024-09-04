<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Bank;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(){

        return view('layouts.index',[
            'product' => Product::all(),
        ]);
    }

    //Banner

    public function banner(){
        return view('layouts.banner');
    }


    public function store(Request $request){
        $formfield = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'savname' => 'required',
            'quantity' => 'required',
            'height' => 'required',
            'width' => 'required',
            'description' => 'required',
            'logo' => 'required',
        ]);


        $logo = array();
        if($files = $request->file('logo')){
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_fullname = $image_name .'.'. $ext;
                $upload_path = 'public/banner/';
                $image_url = $upload_path.$image_fullname;
                $formfield['logo'] = $file->move($upload_path, $image_fullname);
                $logo[] = $image_url;
            }

        }

        Banner::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'savname' => $request->input('savname'),
            'quantity' => $request->input('quantity'),
            'height' => $request->input('height'),
            'width' => $request->input('width'),
            'description' => $request->input('description'),
            'logo' => implode('|', $logo),
            'user_id' => Auth::id()
        ]);

        if ($request->quantity == count($request->logo)){

            return redirect('/userdetails')->with('message', 'Save Successful');

        }else{

        return redirect()->back()->with('error', 'quantity cannot be more than design');

        }

        }

    public function userdetails(){
        return view('layouts.userdetails',
        [
            'bank' => Bank::all(),
            'layouts' => Banner::where('user_id',auth()->id())->latest()->limit(1)->get()
        ]);
    }
}
