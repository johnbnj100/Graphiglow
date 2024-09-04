<?php

namespace App\Http\Controllers;
use App\Models\Payment;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment(Request $request){
        $request->validate([
            'name' => 'required',
            'bank' => 'required',
            'account' => 'required',
            'amount' => 'required'
        ]);

        Payment::create([
          'name'=> $request->input('name'),
          'bank'=> $request->input('bank'),
          'amount'=> $request->input('amount'),
          'account'=> $request->input('account')
        ]);

        return redirect()->back()->with('message', 'Save Successful');
    }

}
