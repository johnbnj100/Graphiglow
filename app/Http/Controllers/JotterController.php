<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Jotter;
use App\Models\Bank;
use Illuminate\Support\Facades\Auth;

class JotterController extends Controller
{
    public function jotter(){
        return view('layouts.jotter',[
            'product' => Product::all()
        ]);
    }

    public function jotters(Request $request){
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
            'type' => 'required',
            'quality' => 'required',
            'quantity' => 'required',
            'style' => 'required',
            'description' => 'required',
            'jotter' => 'required'
        ]);


        $jotter = array();
        if($files = $request->file('jotter')){
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_fullname = $image_name .'.'. $ext;
                $upload_path = 'public/jotter/';
                $image_url = $upload_path.$image_fullname;
                $form['jotter'] = $file->move($upload_path, $image_fullname);
                $jotter[] = $image_url;
            }
        }

        Jotter::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'name' => $request->input('name'),
            'color' => $request->input('color'),
            'type' => $request->input('type'),
            'quality' => $request->input('quality'),
            'quantity' => $request->input('quantity'),
            'style' => $request->input('style'),
            'description' => $request->input('description'),
            'jotter' => implode('|', $jotter),
            'user_id' => Auth::id()
        ]);

        return redirect('/jotter-details')->with('message', 'Save Successful');
    }

    public function Jotterdetail(){
        return view('layouts.jotter-details', [
            'bank' => Bank::all(),
            'layouts' => Jotter::where('user_id', auth()->id())->latest()->limit(1)->get()
        ]);
    }

}
