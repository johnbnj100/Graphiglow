<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Graduation;
use App\Models\Product;
use App\Models\Bank;
use Illuminate\Support\Facades\Auth;


class GraduateController extends Controller
{
    public function graduation(){

        return view('layouts.graduation', [
            'product' => Product::all()
        ]);
    }

    public function graduate(Request $request){
        $formfield = $request->validate([
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
            'documents' => 'required',
            'color' => 'required',
            'size' => 'required',
            'pages' => 'required',
            'logo6' => 'required',
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
                $image_fullname = $filename;
                $filename = $file->store('public/doc/');
                $image_url = $image_fullname;
                $documents[] = $image_url;
                }

                }
        }

        $logo6 = array();
        if($files = $request->file('logo6')){
            foreach ($files as $file){
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_fullname = $image_name . '.' . $ext;
                $upload_path = 'public/graduation/';
                $image_url = $upload_path.$image_fullname;
                $formfield['logo6'] = $file->move($upload_path, $image_fullname);
                $logo6[] = $image_url;
            }
        }

        Graduation::create([
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
            'logo6' => implode('|', $logo6),
            'documents' => implode('|', $documents),
            'user_id' => Auth::id()
        ]);

            return redirect('/graduatedetails')->with('message', 'Save Successful');
    }

    public function details3(){
        return view('layouts.graduatedetails', [
            'bank' => Bank::all(),
            'layouts' => Graduation::where('user_id',auth()->id())->latest()->limit(1)->get()
        ]);
    }



}

