<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function login(Request $request){
        //Validate Data
        $request->validate([
            'username'=> 'Required',
            'password' => 'required'
        ]);
        // dd($request->all());
        // return "this is dashborad";

        //login code here
    }

    public function register(Request $request){
        // dd($request->all());
        // Validate Data
        $validator = Validator::make($request->all(),[
            'username'=> 'required',
            'email'=>'required',
            'registerAs'=>'required',
            'password' => 'required|confirmed|min:8',
            // 'cpassword' => 'required|min:8',
        ]);

        //save in users table
        if ($validator->passes()){

            $register = new User();
            $register->name = $request->username;
            $register->email = $request->email;
            $register->registeras = $request->usertype;
            $register->password = $request->password;
            // 'username'=> $request->username,
            // 'email'=> $request->email,
            // 'registeras'=>$request->usertype,
            // 'password'=> $request->password,
        }
        // dd($register);
        // echo "Data send Successfully";
        // $validationRules =Validator::make($request->all(),[
        //     'username'=> 'required|username|unique:users',
        //     'email'=>'required',
        //     'registerAs'=>'required',
        //     'password' => 'required|min:8',
        //     'cpassword' => 'required|min:8',
        // ]);        
        
        return redirect('/')->witherror('error');
    }

}
