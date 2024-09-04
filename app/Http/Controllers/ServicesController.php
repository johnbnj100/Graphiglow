<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\Product;
use App\Models\Bank;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ServicesController extends Controller
{
    public function card(){
        return view('layouts.card', [
            'product' => Product::all()
        ]);
    }


    public function cards(Request $request){
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
            'quantity' => 'required',
            'description' => 'required',
            'logo9' => 'required',

        ]);


        $logo9 = array();
        if($files = $request->file('logo9')){
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_fullname = $image_name .'.'. $ext;
                $upload_path = 'public/business-card/';
                $image_url = $upload_path.$image_fullname;
                $form['logo9'] = $file->move($upload_path, $image_fullname);
                $logo9[] = $image_url;
            }
        }

        Card::create([
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
            'quantity' => $request->input('quantity'),
            'description' => $request->input('description'),
            'logo9' => implode('|', $logo9),
            'user_id' => Auth::id()
        ]);
            return redirect('/card-details')->with('message', 'Save Successful');

    }

    public function bcard(){
        return view('layouts.card-details', [
            'bank' => Bank::all(),
            'layouts' => Card::where('user_id',auth()->id())->latest()->limit(1)->get()
        ]);
    }


}

