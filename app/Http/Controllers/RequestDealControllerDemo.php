<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestDealController extends Controller
{
    public function requestDeal(){
        return view('/request-deal');
    }
    public function requestDealStore(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'mobile'=> 'required',
            'skypid'=> 'required',
            'address'=> 'required',
            'country'=> 'required',
            'investment'=> 'required',
        ]);

        // dd($request->all());
        return back()->with('Success', 'Form Submitted Successfully');
    }
    
}
