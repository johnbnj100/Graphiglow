<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;
use App\Models\Packaging;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    public function packaging(){
        return view('layouts.packaging', [
            'product' => Product::all()
        ]);
    }


    public function package(Request $request){
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
            'quantity' => 'required',
            'paper' => 'required',
            'description' => 'required',
            'logo4' => 'required',

        ]);

        $logo4 = array();
        if($files = $request->file('logo4')){
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_fullname = $image_name .'.'. $ext;
                $upload_path = 'public/package/';
                $image_url = $upload_path.$image_fullname;
                $form['logo4'] = $file->move($upload_path, $image_fullname);
                $logo4[] = $image_url;
            }
        }

        Packaging::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'name' => $request->input('name'),
            'color' => $request->input('color'),
            'quantity' => $request->input('quantity'),
            'paper' => $request->input('paper'),
            'description' => $request->input('description'),
            'logo4' => implode('|', $logo4),
            'user_id' => Auth::id()
        ]);

            return redirect('/packagedetails')->with('message', 'Save Successful');
    }

    public function details2(){
        return view('layouts.packagedetails', [
            'bank' => Bank::all(),
            'layouts' => Packaging::where('user_id',auth()->id())->latest()->limit(1)->get()
        ]);
    }

}


