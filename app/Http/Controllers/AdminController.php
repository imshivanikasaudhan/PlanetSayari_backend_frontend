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
        $admin = Admin::where('email', 'admin@gmail.com')->first();
            // Retrieve the admin's stored email and hashed password
            $storedEmail = $admin->email;
            $storedPassword = $admin->password;
        
            // User-supplied credentials
            $inputEmail = $request->email; 
            $inputPassword = $request->password; 
                    
            if ($inputEmail === $storedEmail && $inputPassword === $storedPassword) {
                return redirect('/admin-dashboard');
            } else {
                return redirect('/ps-admin')->with('error', 'Email or Password Incorrect');
            }

        // }
        // Validate Data
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);

        // Admin::where("email", $request->email)->where("password", $request->password)->first();
        // return redirect('/admin-dashboard');

        // // if($request->user_type == 'ps-admin'){
        // //     Admin::where("email",$request->email)->where("password", $request->password)->first();
        // //     return redirect('/admin-dashboard');        
        // // }
        // // else if ($request->user_type == 'user'){
        // //     User::where("email",$request->email)->first();
        // //     return redirect();
        // // }
        // // if (Auth::attempt($request->only('email', 'password'))) {
        // //     return redirect('/admin-dashboard');
        // // }
        
        // // dd($request->all());
        // // return back()->withErrors(['email' => 'Invalid email or password.']);
        // return redirect('/ps-admin')->with('error', 'Email or Password Incorrect');

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

    // Active or Deactivate User    
    public function activateAccount(User $user)    {
        $user->status = 'active';
        $user->save();
        return redirect()->back()->with('success', 'Account Activated Successfully.');
    }
    public function deactivateAccount(User $user){
        $user->status = 'inactive';
        $user->save();
        return redirect()->back()->with('success', 'Account Deactivated Successfully.');
    }

    // User Data Fetch Update Function
    public function userDataUpdate($id){
        $userData = User::find($id);
        // dd($userData);
        return view('\view-user-data', compact('userData'));
    }

    // Request Data Fetch Function
    public function requestView($id){
        // dd($id);
        // $requestView = Investor::all();
        $requestId = Investor::find($id);
        return view('\view-request', compact('requestId'));
    }

    // Request Data Status Update Function
    public function requestViewUpdateStatus(Request $request){
        //NOTE:- 'request_id' field is coming from user profile form from input field. 
        $requestData = Investor::find($request->request_id);
        $requestData->status = $request->status;
        $requestData->save();
        //for redirection
        return back()->with('Success', 'Form Submitted Successfully');
    }

    
}
