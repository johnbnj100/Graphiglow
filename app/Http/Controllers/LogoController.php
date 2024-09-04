<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Bank;
use Illuminate\Support\Facades\Auth;

class LogoController extends Controller
{
    public function logo(){
        return view('layouts.logo');
    }

    public function storelogo(Request $request){
        $formfield = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
            'material' => 'required',
            'name' => 'required',
            'logo2' => 'required',
            'height' => 'required',
            'width' => 'required',
            'description' => 'required',
        ]);

        $logo2 = array();
        if($files = $request->file('logo2')){
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_fullname = $image_name .'.'. $ext;
                $upload_path = 'public/logo/';
                $image_url = $upload_path.$image_fullname;
                $formfield['logo2'] = $file->move($upload_path, $image_fullname);
                $logo2[] = $image_url;
            }
        }


        Logo::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'name' => $request->input('name'),
            'material' => $request->input('material'),
            'height' => $request->input('height'),
            'width' => $request->input('width'),
            'description' => $request->input('description'),
            'logo2' => implode('|', $logo2),
            'user_id' => Auth::id()
        ]);

        return redirect('/logodetails')->with('message', 'Save Successful');

    }

    public function details0(){
        return view('layouts.logodetails', [
            'bank' => Bank::all(),
            'layouts' => Logo::where('user_id',auth()->id())->latest()->limit(1)->get()
        ]);

    }

}
