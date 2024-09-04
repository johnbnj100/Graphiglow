<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Bank;
use App\Models\Business;
use Illuminate\Support\Facades\Auth;

class BusinessController extends Controller
{
    public function business(){
        return view('layouts.business',[
            'product' => Product::all()
        ]);
    }

    public function business2(Request $request){
        $form = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'name' => 'required',
            'quantity' => 'required',
            'quality' => 'required',
            'color' => 'required',
            'size' => 'required',
            'pages' => 'required',
            'documents' => 'required',
            'business' => 'required',
            'description' => 'required',
        ]);

        $documents = array();
        $allowed_ext = ['pdf','docx','doc'];
        if($files = $request->file('documents')){
            foreach ($files as $file){
                $filename = $file->getClientOriginalName();
                $ext = $file->getClientOriginalExtension();
                $check = in_array($ext, $allowed_ext);
                if($check){
                $file->store('public/business/');
                $image_url = $filename;
                $documents[] = $image_url;

                 }

                }
        }


        $business = array();
        if($files = $request->file('business')){
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_fullname = $image_name .'.'. $ext;
                $upload_path = 'public/business/';
                $image_url = $upload_path.$image_fullname;
                $form['business'] = $file->move($upload_path, $image_fullname);
                $business[] = $image_url;
            }

            if ($form['business'] == ['mp3', 'mp4', 'webm']){
                return redirect('/business');
            }
        }

        Business::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
            'size' => $request->input('size'),
            'phone' => $request->input('phone'),
            'name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
            'quality' => $request->input('quality'),
            'color' => $request->input('color'),
            'pages' => $request->input('pages'),
            'description' => $request->input('description'),
            'documents' => implode('|', $documents),
            'business' => implode('|', $business),
            'user_id' => Auth::id()
        ]);

        return redirect('/businessdetails')->with('message', 'Save Successful');
}


    public function details8(){
    return view('layouts.businessdetails', [
        'bank' => Bank::all(),
        'layouts' => Business::where('user_id', auth()->id())->latest()->limit(1)->get()
    ]);
}

}



