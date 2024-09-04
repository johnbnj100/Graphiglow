<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Church;
use App\Models\Product;
use App\Models\Bank;
use Illuminate\Support\Facades\Auth;

class ChurchController extends Controller
{
    public function church(){

        return view('layouts.church', [
            'product' => Product::all()
        ]);

    }

    public function churchs(Request $request){
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
            'logo7' => 'required',
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
                $filename = $file->store('public/church/');
                $image_url = $image_fullname;
                $documents[] = $image_url;
                }

                }
        }

        $logo7 = array();
        if($files = $request->file('logo7')){
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_fullname = $image_name .'.'. $ext;
                $upload_path = 'public/church/';
                $image_url = $upload_path.$image_fullname;
                $form['logo7'] = $file->move($upload_path, $image_fullname);
                $logo7[] = $image_url;
            }
            if ($files == ['mp3', 'mp4', 'webm']){
                return redirect('/business');
            }
        }

        Church::create([
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
            'logo7' => implode('|', $logo7),
            'documents' => implode('|', $documents),
            'user_id' => Auth::id()
        ]);

            return redirect('/churchdetails')->with('message', 'Save Successful');
    }

    public function details6(){
        return view('layouts.churchdetails', [
            'bank' => Bank::all(),
            'layouts' => Church::where('user_id', auth()->id())->latest()->limit(1)->get()
        ]);
    }

}




