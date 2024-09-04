<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;
use App\Models\Ctp;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CtpController extends Controller
{
    public function ctp(){
        return view('layouts.ctp', [
            'product' => Product::all()
        ]);
    }

    public function storectp(Request $request){
        $formfield = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
            'color' => 'required',
            'quantity' => 'required',
            'plate' => 'required',
            'name' => 'required',
            'logo3' => 'required',
            'description' => 'required',
        ]);

        $logo3 = array();
        if($files = $request->file('logo3')){
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_fullname = $image_name .'.'. $ext;
                $upload_path = 'public/ctp/';
                $image_url = $upload_path.$image_fullname;
                $formfield['logo3'] = $file->move($upload_path, $image_fullname);
                $logo3[] = $image_url;
            }
        }

        Ctp::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
            'quantity' => $request->input('quantity'),
            'phone' => $request->input('phone'),
            'color' => $request->input('color'),
            'name' => $request->input('name'),
            'plate' => $request->input('plate'),
            'description' => $request->input('description'),
            'logo3' => implode('|', $logo3),
            'user_id' => Auth::id()
        ]);

            return redirect('/ctpdetails')->with('message', 'Save Successful');

    }

public function details1(){
    return view('layouts.ctpdetails', [
        'bank' => Bank::all(),
        'layouts' => Ctp::where('user_id', auth()->id())->latest()->limit(1)->get()
    ]);
}

}
