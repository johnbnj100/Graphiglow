<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Validation\Rule;
use App\Models\Calender;
use App\Models\Bank;
use Illuminate\Support\Facades\Auth;

class CalendarController extends Controller
{
    public function calendar(){

        return view('layouts.calender',[
            'product' => Product::all()
        ]);
    }

    public function calendars(Request $request){
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
            'height' => 'required',
            'width' => 'required',
            'description' => 'required',
            'calendar' => 'required',

        ]);


        $calendar = array();
        if($files = $request->file('calendar')){
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_fullname = $image_name .'.'. $ext;
                $upload_path = 'public/calendar/';
                $image_url = $upload_path.$image_fullname;
                $form['calendar'] = $file->move($upload_path, $image_fullname);
                $calendar[] = $image_url;
            }
        }


        Calender::create([
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
            'height' => $request->input('height'),
            'width' => $request->input('width'),
            'description' => $request->input('description'),
            'calendar' => implode('|', $calendar),
            'user_id' => Auth::id()
        ]);

            return redirect('/calendar-details')->with('message', 'Save Successful');
    }

    public function Calender(){
        return view('layouts.calendar-details', [
            'bank' => Bank::all(),
            'layouts' => Calender::where('user_id', auth()->id())->latest()->limit(1)->get()
        ]);
    }
}
