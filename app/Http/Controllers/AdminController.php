<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use App\Models\User;
use App\Models\Admin;
use App\Models\Usercontact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function Adminlogin(Request $request){

        // $credentials = [
        //     'email' => $request->email,
        //     'password' => $request->password
        // ];
        // if (Auth::attempt($credentials)) {
        //     return redirect('/admin-dashboard')->with('success', 'Login Successfully');
        // }
        // dd($request);

        // return back()->withErrors(['email' => 'Invalid email or password.']);
        return redirect('/admin-dashboard')->with('error', 'Username or Password Incorrect');

        return view('authentication-login');
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
        $InvestorRequest = DB::select('select * from investor_request');
        return view('admin-investor-request', compact('InvestorRequest'));
    }

    // Admin Broker Request Function
    public function AdminBrokerRequest(){
        $BrokerRequest = Investor::all();
        // Execute a raw SQL query
        $BrokerRequest = DB::select('select * from investor_request');
        return view('admin-broker-request', compact('BrokerRequest'));
    }

    // Contact Data Fetch Data Function
    public function UserFormData(){
        $ContactFormData = Usercontact::all();
        // Execute a raw SQL query
        $ContactFormData = DB::select('select *, DATE(created_at) AS date, TIME(created_at) As time from user_contact');
        return view('admin-user-query', compact('ContactFormData'));
    }


    // User Data Fetch Function
    public function userData(){
        // return 'test';
        return view('\view-investor-data');
    }

    
}
