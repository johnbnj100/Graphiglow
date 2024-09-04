<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Bank;
use App\Models\Flyer;
use Illuminate\Support\Facades\Auth;

class FlyerController extends Controller
{
    public function flyer(){
        return view('layouts.flyer',[
            'product' => Product::all()
        ]);
    }

    public function flyers(Request $request){
        $form = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'name' => 'required',
            'color' => 'required',
            'size' => 'required',
            'type' => 'required',
            'quantity' => 'required',
            'quality' => 'required',
            'description' => 'required',
            'flyer' => 'required',
        ]);


        $flyer = array();
        if($files = $request->file('flyer')){
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_fullname = $image_name .'.'. $ext;
                $upload_path = 'public/flyer/';
                $image_url = $upload_path.$image_fullname;
                $form['flyer'] = $file->move($upload_path, $image_fullname);
                $flyer[] = $image_url;
            }
        }

        Flyer::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'name' => $request->input('name'),
            'color' => $request->input('color'),
            'size' => $request->input('size'),
            'type' => $request->input('type'),
            'quantity' => $request->input('quantity'),
            'quality' => $request->input('quality'),
            'description' => $request->input('description'),
            'flyer' => implode('|', $flyer),
            'user_id' => Auth::id()
        ]);

        return redirect('/flyer-details')->with('message', 'Save Successful');
    }

    public function flyerdetail(){
        return view('layouts.flyer-details', [
            'bank' => Bank::all(),
            'layouts' => Flyer::where('user_id',auth()->id())->latest()->limit(1)->get()
        ]);
    }


}


