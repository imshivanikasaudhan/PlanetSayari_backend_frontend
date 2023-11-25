<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function index()
    {
        return view('/index');
    }

    // Login Function
    public function loginStore(Request $request)
    {
        //Validate Data
        // $request->validate([
        //     'username'=> 'Required',
        //     'password' => 'required'
        // ]);
        // dd($request->all());
        // return "this is dashborad";

        // login code here
        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];
        if (Auth::attempt($credentials)) {
            return redirect('/dashboard')->with('success', 'Login Successfully');
        }

        // return back()->withErrors(['email' => 'Invalid email or password.']);
        return redirect('/')->with('error', 'Username or Password Incorrect');
    }

    // Register Function
    public function registerStore(Request $request)
    {       
        $rules = array(
            'username' => 'required|unique:users,username',
            'email' => 'required|string|email|max:255|unique:users',
            'user_type' => 'required',
            'password' => 'required|min:8|confirmed',
        );
        // dd($request->all());
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('/')->withErrors($validator->errors('Username Aready Exist'));
        } else {

            $user = new User();
            $user->username = $request->username;
            $user->email = $request->email;
            $user->user_type = $request->user_type;
            $user->password = bcrypt($request->password);
            // $user->cpassword = bcrypt($request->cpassword);
            // if ($user->password == $user->cpassword) {
            //     $user->save();
            //     return back()->with('success', 'Register Successfully');
            // } else {
            //     return redirect('/')->withErrors($validator->errors('Username Aready Exist'));
            // }

            // Save the new user to the database
            $user->save();
            return back()->with('success', 'Register Successfully');

        }

        // New Code
        // Validate Data
        // $request->validate([
        //     'username' => 'required|unique:users,username',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'user_type' => 'required',
        //     'password' => 'required|string|min:8|confirmed',
        // ]);

        // // Save data into Table
        // User::create([
        //     'username' => $request->username,
        //     'email' => $request->email,
        //     'user_type' => $request->user_type,
        //     'password' => bcrypt($request->password),
        // ]);

        // // Login Code Here
        // if (Auth::attempt($request->only('username', 'email', 'password'))) {
        //     return redirect('/dashboard');
        // }
        // return redirect('/')->withError('username or email already exist');


        // dd($request->all());        

        // $validator = Validator::make($request->all(),[
        //     // Validate the form input
        //     'username'=> 'required|unique:users,username',
        //     'email'=>'required|email',
        //     'registerAs'=>'required', 
        //     'password' => 'required|min:8|confirmed',
        //     'cpassword' => 'required|min:8',
        // ]);


        // if($validator->passes()){
        // Create a new user instance and set the user attributes

        // }   

        // return redirect('/dashboard')->witherror('error');

    }

    // Logout Function
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    // Password Forget Function
    // public function Resetpassword(Request $request){
    //     $request-validate();
    // }
}
