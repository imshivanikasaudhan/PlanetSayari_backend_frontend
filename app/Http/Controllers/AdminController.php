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

    public function PlanetAdminLogin()
    {
        return view('authentication-login');
    }

    // Admin Login Function
    public function Adminlogin(Request $request)
    {
        // info('inside controller');
        // $admin = Admin::where('email', $request->email)->first();
        // info($admin);
        // if ($admin) {

        //     $is_admin_authorized = $admin->update(["is_auth" => 1]);
        //     if ($is_admin_authorized) {
        //         // app()->instance('auth_user_email', $admin->email);
        //         $request->attributes->add(['user_id' => $admin->email]);
        //         // info(app('auth_user_email'));
        //         // $request->merge(['email' => $admin->email]);
        //         info($request->all());
        //         return redirect('/admin-dashboard');

        //     }
        // } else {
        //     return redirect('/ps-admin')->with('error', 'Email or Password Incorrect');
        // }

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

    public function registerView()
    {
        return view('authentication-register');
    }

    public function AdminRegisterStore(Request $request)
    {
        // Validate Data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // save data
        Admin::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //login user 
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/admin-dashboard');
        }
        return redirect('/ps-register')->with('error', 'Email or Password Incorrect');
    }

    // Admin Logout Function
    public function logout()
    {
        \Session()::flush();
        \Auth()::logout();
        return redirect('');
    }

    // Admin Dashboard Data View Function
    public function AdminDashboardData(){
        $totalUsers = User::count();
        $totalInvestor = User::where('user_type', '1')->count();
        $totalBroker = User::where('user_type', '0')->count();
        $totalDeal = Investor::count();
        $totalInvestorDeal = Investor::where('broker_per', null)->count();
        $totalBrokerDeal = Investor::where('inst_amt', null)->count();
        $totalDealPending = Investor::where('status', 'Pending')->count();
        $totalContactQuery = Usercontact::count();
        $totalDealPending = Investor::where('status', 'Pending')->count();

        // user Investor Table
        $usersInvestor = DB::table('users')->where('user_type', '1')->orderBy('created_at', 'desc')->paginate(3);
        
        // user Broker Table
        $usersBroker = DB::table('users')->where('user_type', '0')->orderBy('created_at', 'desc')->paginate(3);

        return view('admin-dashboard', compact('totalUsers', 'totalInvestor', 'totalBroker' ,'totalDeal', 'totalInvestorDeal', 'totalBrokerDeal', 'totalDealPending', 'totalContactQuery', 'usersInvestor', 'usersBroker'));
    }

    // Admin Broker Investor Function
    public function AdminInvestorData()
    {
        $users = User::all();
        // Execute a raw SQL query
        $users = DB::table('users')->where('user_type', '1')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin-investor-data', compact('users'));
    }

    // Admin Broker User Function
    public function AdminBrokerData()
    {
        $users = User::all();
        // Execute a raw SQL query
        $users = DB::table('users')->where('user_type', '0')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin-broker-data', compact('users'));
    }

    // Admin Investor Request Function
    public function AdminInvestorRequest()
    {
        $InvestorRequest = Investor::all();
        // Execute a raw SQL query
        $InvestorRequest = DB::table('investor_request')
            ->select('*', DB::raw('DATE(created_at) AS date'), DB::raw('TIME(created_at) AS time'))
            ->where('broker_per', null)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('admin-investor-requests', compact('InvestorRequest'));
    }
    // Admin Broker Request Function
    public function AdminBrokerRequest()
    {
        $BrokerRequest = Investor::all();
        // Execute a raw SQL query
        $BrokerRequest = DB::table('investor_request')
            ->select('*', DB::raw('DATE(created_at) AS date'), DB::raw('TIME(created_at) AS time'))
            ->where('inst_amt', null)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('admin-broker-requests', compact('BrokerRequest'));
    }

    // Contact Data Fetch Data Function
    public function UserFormData()
    {
        $ContactFormData = Usercontact::all();
        // Execute a raw SQL query
        $ContactFormData = DB::table('user_contact')
        ->select('*', DB::raw('DATE(created_at) AS date'), DB::raw('TIME(created_at) AS time'))
        ->orderBy('created_at', 'desc')
        ->paginate(10);
        return view('admin-user-query', compact('ContactFormData'));
    }


    // User Data Fetch Function
    public function userData($id)
    {
        $userData = User::find($id);
        return view('\view-user-data', compact('userData'));
    }

    // Active or Deactivate User    
    public function activateAccount(User $user)
    {
        $user->status = 'Active';
        $user->save();
        return redirect()->back()->with('success', 'Account Activated Successfully.');
    }
    public function deactivateAccount(User $user)
    {
        $user->status = 'Inactive';
        $user->save();
        return redirect()->back()->with('success', 'Account Deactivated Successfully.');
    }

    // User Data Fetch Update Function
    public function userDataUpdate($id)
    {
        $userData = User::find($id);
        // dd($userData);
        return view('\view-user-data', compact('userData'));
    }

    // Request Data Fetch Function
    public function requestView($id)
    {
        // dd($id);
        // $requestView = Investor::all();
        $requestId = Investor::find($id);
        return view('\view-request', compact('requestId'));
    }

    // Request Data Status Update Function
    public function requestViewUpdateStatus(Request $request)
    {
        $requestData = Investor::find($request->request_id);
        $requestData->status = $request->status;
        $requestData->save();
        //for redirection
        return back()->with('Success', 'Form Submitted Successfully');
    }
}
