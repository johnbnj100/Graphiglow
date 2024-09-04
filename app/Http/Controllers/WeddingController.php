<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Wedding;
use App\Models\Bank;
use Illuminate\Support\Facades\Auth;

class WeddingController extends Controller
{
    public function wedding(){

        return view('layouts.wedding', [
            'product' => Product::all()
        ]);

    }

    public function weddings(Request $request){
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
            'documents' => 'required',
            'size' => 'required',
            'pages' => 'required',
            'logo8' => 'required',
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
                $filename = $file->store('public/doc/');
                $image_url = $filename;
                $documents[] = $image_url;
                }

                }
        }

        $logo8 = array();
        if($files = $request->file('logo8')){
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_fullname = $image_name .'.'. $ext;
                $upload_path = 'public/wedding/';
                $image_url = $upload_path.$image_fullname;
                $form['logo8'] = $file->move($upload_path, $image_fullname);
                $logo8[] = $image_url;
            }
        }

        Wedding::create([
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
            'logo8' => implode('|', $logo8),
            'documents' => implode('|', $documents),
            'user_id' => Auth::id()
        ]);


            return redirect('/weddingdetails')->with('message', 'Save Successful');

    }

    public function details7(){
        return view('layouts.weddingdetails', [
            'bank' => Bank::all(),
            'layouts' => Wedding::where('user_id',auth()->id())->latest()->limit(1)->get()
        ]);
    }

}

