<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{   
    public function index(){
        return view('/index');
    }

    public function loginStore(Request $request){
        //Validate Data
        // $request->validate([
        //     'username'=> 'Required',
        //     'password' => 'required'
        // ]);
        // dd($request->all());
        // return "this is dashborad";

        // login code here
        $credentials = [
            'username'=> $request->username,
            'password' => $request->password
        ];
        if (Auth::attempt($credentials)) {
            return redirect('/dashboard')->with('success', 'Login Successfully');
        }
       
    
        // return back()->withErrors(['email' => 'Invalid email or password.']);
        return redirect('/')->with('error', 'Username or Password Incorrect');
    }

    public function registerStore(Request $request){
        // dd($request->all());
        // Validate Data
        // $request->validate([
        //     'username'=> 'required|unique:Users',
        //     'email'=> 'required|email',
        //     'registerAs'=> 'required',
        //     'password'=> 'required|confirmed|min:8',
        //     'cpassword'=> 'required|min:8'
        // ]);
        $validator = Validator::make($request->all(),[
            'username'=> 'required|unique:Users',
            'email'=>'required|email',
            'registerAs'=>'required',
            'password' => 'required|confirmed|min:8',
            'cpassword' => 'required|min:8',
        ]);

         // Create a new user instance and set the user attributes
         $user = new User();
         $user->username = $request->username;
         $user->email = $request->email;
         $user->user_type = $request->registerAs;
         $user->password = hash::make($request->password);
         $user->cpassword = bcrypt($request->cpassword);
 
         // Save the new user to the database
         $user->save();

        //save in users table
        // if ($validator->passes()){

        //     $register = new Register();
        //     $register->name = $request->username;
        //     $register->email = $request->email;
        //     $register->registeras = $request->usertype;
        //     $register->password = $request->password;
        //     // 'username'=> $request->username,
        //     // 'email'=> $request->email,
        //     // 'registeras'=>$request->usertype,
        //     // 'password'=> $request->password,
        // }
        // dd($register);
        // echo "Data send Successfully";
        // $validationRules =Validator::make($request->all(),[
        //     'username'=> 'required|username|unique:users',
        //     'email'=>'required',
        //     'registerAs'=>'required',
        //     'password' => 'required|min:8',
        //     'cpassword' => 'required|min:8',
        // ]);        
        
        // return redirect('/')->witherror('error');
        return back()->with('success', 'Register Successfully');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

}
