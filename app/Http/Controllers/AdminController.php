<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use App\Models\User;
use App\Models\Admin;
use App\Models\Usercontact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{   
    public function PlanetAdminLogin(){
        return view('authentication-login');
    }
    // Admin Login Function
    public function Adminlogin(Request $request){

        // Validate Data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        Admin::where("email", $request->email AND "password", $request->password)->first();
        return redirect('/admin-dashboard');

        // if($request->user_type == 'ps-admin'){
        //     Admin::where("email",$request->email)->first();
        //     return redirect();        
        // }
        // else if ($request->user_type == 'user'){
        //     User::where("email",$request->email)->first();
        //     return redirect();
        // }
        // if (Auth::attempt($request->only('email', 'password'))) {
        //     return redirect('/admin-dashboard');
        // }
        
        // dd($request->all());
        // return back()->withErrors(['email' => 'Invalid email or password.']);
        return redirect('/ps-admin')->with('error', 'Email or Password Incorrect');

        // return view('authentication-login');
    }

    public function registerView(){
        return view('authentication-register');
    }

    public function AdminRegisterStore(Request $request){
        // Validate Data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // save data
        Admin::create([
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);
        
        //login user 
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/admin-dashboard');
        }
        return redirect('/ps-register')->with('error', 'Email or Password Incorrect');
    }

    // Admin Logout Function
    public function logout(){
        \Session()::flush();
        \Auth()::logout();
        return redirect('');
    }

    // Admin Broker Investor Function
    public function AdminInvestorData(){
        $users = User::all();
        // Execute a raw SQL query
        $users = DB::select('select * from users');
        return view('admin-investor-data', compact('users'));
    }

    // Admin Broker User Function
    public function AdminBrokerData(){
        $users = User::all();
        // Execute a raw SQL query
        $users = DB::select('select * from users');
        return view('admin-broker-data', compact('users'));
    }

    // Admin Investor Request Function
    public function AdminInvestorRequest(){
        $InvestorRequest = Investor::all();
        // Execute a raw SQL query
        $InvestorRequest = DB::select('select *, DATE(created_at) AS date, TIME(created_at) As time from investor_request ');
        return view('admin-investor-requests', compact('InvestorRequest'));
    }
    // Admin Broker Request Function
    public function AdminBrokerRequest(){
        $BrokerRequest = Investor::all();
        // Execute a raw SQL query
        $BrokerRequest = DB::select('select *, DATE(created_at) AS date, TIME(created_at) As time from investor_request');
        return view('admin-broker-requests', compact('BrokerRequest'));
    }

    // Contact Data Fetch Data Function
    public function UserFormData(){
        $ContactFormData = Usercontact::all();
        // Execute a raw SQL query
        $ContactFormData = DB::select('select *, DATE(created_at) AS date, TIME(created_at) As time from user_contact');
        return view('admin-user-query', compact('ContactFormData'));
    }


    // User Data Fetch Function
    public function userData($id){
        $userData = User::find($id);
        return view('\view-user-data', compact('userData'));
    }
    // User Data Fetch Update Function
    public function userDataUpate($id){
        $userData = User::find($id);
        dd($userData);
        return view('\view-user-data', compact('userData'));
    }
    // Request Data Fetch Function
    public function requestView($id){
        // dd($id);
        // $requestView = Investor::all();
        $requestId = Investor::find($id);
        return view('\view-request', compact('requestId'));
    }

    
}
