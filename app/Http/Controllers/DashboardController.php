<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelpContactRequest;
use App\Models\Usercontact;
use App\Models\Investor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    // Password Change User Profile Start
    public function changePassword(Request $request)
    {   
        // dd($request->all());
        // Validate the request data
        $request->validate([
            'current_password' => 'required|min:8',
            'new_password' => 'required|min:8|confirmed',
        ]);

        // dd($request->all());
        $current_user = Auth()->user();
        // Check the current password
        if (Hash::check($request->current_password, $current_user->password)) {
            // return back()->with('current_password', 'The current password you entered is incorrect.');
            
            $current_user->update([
                'password'=>bcrypt($request->new_password)
            ]);
            // Success message
            return back()->with('success', 'Your password has been changed successfully.');
        }else{
            return back()->with('current_password', 'The current password you entered is incorrect.');

        }
        // Hash the new password
        // $newPassword = Hash::make($request->new_password);

        // dd($newPassword);
        // // Update the user's password
        // // Auth::user()->password->update([
        // //     'password' => $newPassword,
        // // ]);

        // // Success message
        // return back()->with('success', 'Your password has been changed successfully.');
    }
    // Password Change User Profile End


    // Dashboard Function
    public function dashboard()
    {
        $user = Auth::user();
        if ($user == null) {
            return redirect('/');
        }
        // $statusDeal = $user->dashboard()->orderBy('created_at', 'desc')->paginate(10);
        $statusDeal = $user->statusDeal()->orderBy('created_at', 'desc')->paginate(5);
        // $totalInvestors = user::count();
        // $totalBrokers = Broker::count();
        // $totalDealRequests = DealRequest::count();

        return view('/dashboard', compact('statusDeal'));

        // return view('/dashboard');
    }

    // Request Deal Function
    public function requestDeal()
    {
        $user = Auth::user();
        if ($user == null) {
            return redirect('/');
        }else{

            return view('/request-deal');
        }
    }
    public function requestDealStore(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'skypeid' => 'required',
            'address' => 'required',
            'country' => 'required',
            'inst_amt' => 'nullable',
            'broker_per' => 'nullable',
            'document' => 'required|mimes:pdf|max:4096', // Set file size limit in kilobytes,
        ]);

        // dd($request->all());
        $RequestDeal = new Investor();
        $RequestDeal->user_id = $request->user_id;
        $RequestDeal->full_name = $request->full_name;
        $RequestDeal->email = $request->email;
        $RequestDeal->phone = $request->phone;
        $RequestDeal->skypeid = $request->skypeid;
        $RequestDeal->address = $request->address;
        $RequestDeal->country = $request->country;
        $RequestDeal->inst_amt = $request->inst_amt;
        $RequestDeal->broker_per = $request->broker_per;
        // $RequestDeal->document = $request->document;

        // Upload File Here
        if ($request->document) {
            // dd($request->document);
            $oldImage = $RequestDeal->document;
            $text = $request->document->getClientOriginalExtension();
            $newFileName = time() . '.' . $text;
            $request->document->move(public_path() . '/backend/assets/images/', $newFileName); //This will save file in the folder

            $RequestDeal->document = $newFileName;
            $RequestDeal->save();

            File::delete(public_path() . '/backend/assets/images/' . $oldImage);
        }

        // Save the new user to the database
        $RequestDeal->save();

        return back()->with('Success', 'Request Submitted Successfully');
    }

    // Deal Status Function
    public function statusDeal()
    {
        $user = Auth::user();
        if ($user == null) {
            return redirect('/');
        }
        // $statusDeal = $user->statusDeal;
        $statusDeal = $user->statusDeal()->orderBy('created_at', 'desc')->paginate(10);
        return view('/deal-status', compact('statusDeal'));
    }

    // Delete Function
    public function deleteStatusDeal($id)
    {
        $DealStatus = Investor::find($id);
        // dd($DealStatus);
        $DealStatus->delete();
        return redirect('/deal-status')->with('status', 'Data Deleted Successfully');
    }

    // Help Contact Form Function 
    public function helpContact()
    {   
        $user = Auth::user();
        if ($user == null) {
            return redirect('/');
        }else{
            return view('/help-contact');
        }
    }
    public function helpContactStore(HelpContactRequest $request)
    {

        $userContact = new Usercontact();
        $userContact->full_name = $request->name;
        $userContact->email = $request->email;
        $userContact->number = $request->phone;
        $userContact->message = $request->Contact_Message;

        $userContact->save();
        //for redirection
        return back()->with('Success', 'Form Submitted Successfully');
    }

    // User Profile Function
    public function userprofile()
    {
        $user = Auth::user();
        if ($user == null) {
            return redirect('/');
        }else{
            return view('/user-profile');
        }
    }
    public function userprofile_Update(User $user, Request $request)
    {

        // Validation fields
        $validator = Validator::make($request->all(), [
            'full_name' => 'nullable',
            'email' => 'nullable',
            'phone' => 'nullable',
            'gender' => 'nullable',
            'skypid' => 'nullable',
            'city' => 'nullable',
            'address' => 'nullable',
            'pincode' => 'nullable',
            'country' => 'nullable',
            'image' => 'sometimes|image:gif,png,jpeg,jpg'
        ]);
        if ($validator->passes()) {
            //NOTE:- 'user_id' field is coming from user profile form from input field.    
            $user = User::find($request->user_id);
            $user->full_name = $request->full_name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->gender = $request->gender;
            $user->skype = $request->skypid;
            $user->city = $request->city;
            $user->pin = $request->pincode;
            $user->address = $request->address;
            $user->country = $request->country;
            // $user->image = $request->image;
            $user->save();

            //Upload Image Here
            if ($request->image) {
                $oldImage = $user->image;
                $text = $request->image->getClientOriginalExtension();
                $newFileName = time() . '.' . $text;
                $request->image->move(public_path() . '/backend/assets/images/profile/', $newFileName); //This will save file in the folder

                $user->image = $newFileName;
                $user->save();

                File::delete(public_path() . '/backend/assets/images/profile/' . $oldImage);
            }

            return redirect()->route('user-profile')->with('success', 'Profile Updated Successfully.');
        } else {
            //return with errors
            // return redirect()->route('user-profile');
            return redirect()->route('user-profile')->withErrors($validator)->withInput();
        }
        // dd($request->all());
    }
}
