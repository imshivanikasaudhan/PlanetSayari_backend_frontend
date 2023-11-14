<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelpContactRequest;
use App\Models\Usercontact;

// use illuminate\Validation\Validator;

class HelpController extends Controller
{
    public function helpContact(){
        return view('/help-contact');
    }
    public function helpContactStore(HelpContactRequest $request){

        $userContact = new Usercontact();
        $userContact->name = $request->name;
        $userContact->email = $request->email;
        $userContact->phone = $request->phone;
        $userContact->Contact_Message = $request->Contact_Message;        
 
         // Save the new user to the database
        $userContact->save();


        
        //transfer this validation to helpcontactrequest
        // $request->validate([
        //     'name'=> 'required',
        //     'email'=> 'required|email',
        //     'phone'=> 'required',
        //     'Contact_Message'=> 'required|min:305'
        // ]);
        //for debug
        // dd($request->all());

        //for redirection
        return back()->with('Success', 'Form Submitted Successfully');
    }
}