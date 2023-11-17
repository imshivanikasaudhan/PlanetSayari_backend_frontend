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

class DashboardController extends Controller
{   
    // dashboard Function
    public function dashboard(){
        return view('/dashboard');
    }

    // Request Deal function
    public function requestDeal(){
        return view('/request-deal');
    }
    public function requestDealStore(Request $request){
        $request->validate([
            'full_name'=> 'required',
            'email'=> 'required|email',
            'phone'=> 'required',
            'skypeid'=> 'required',
            'address'=> 'required',
            'country'=> 'required',
            'inst_amt'=> 'required',
        ]);
        
        // dd($request->all());
        $RequestDeal = new Investor();
        $RequestDeal->full_name = $request->full_name;
        $RequestDeal->email = $request->email;
        $RequestDeal->phone = $request->phone;
        $RequestDeal->skypeid = $request->skypeid;
        $RequestDeal->address = $request->address;
        $RequestDeal->country = $request->country;
        $RequestDeal->inst_amt = $request->inst_amt;     
        
        // Save the new user to the database
        $RequestDeal->save();

        return back()->with('Success', 'Request Submitted Successfully');
    }

    // Deal Status Function
    public function statusDeal(){
        $dealStatus = Investor::all();
        return view('/deal-status', compact('dealStatus'));
    }

    // Help Contact form function 
    public function helpContact(){
        return view('/help-contact');
    }
    public function helpContactStore(HelpContactRequest $request){

        $userContact = new Usercontact();
        $userContact->full_name = $request->name;
        $userContact->email = $request->email;
        $userContact->number = $request->phone;
        $userContact->message = $request->Contact_Message;        
 
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

    // user profile

    // public function userprofile($id){
    //     $users = user::find($id);
    //     return view('/user-profile', compact('users', 'id'));
    // }

    public function userprofile(){    
        // $user = User();       
        
        // return view('user-profile',['user'=>$user]);      
        return view('/user-profile');
    }
    public function userprofile_Update(User $user, Request $request){

        // Validation fields
        $validator = Validator::make($request->all(),[
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
        if ($validator->passes()){
            //Option #1
            //save data here
            
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
            $user->image = $request->image;
            $user->save();
            
            //Option #2
            //$user->fill($request->post())->save();

            //Upload Image Here
            if($request->image){
                $oldImage = $user->image;
                $text = $request->image->getClientOriginalExtension();
                $newFileName = time().'.'.$text;
                $request->image->move(public_path().'/backend/assets/images/profile/',$newFileName); //This will save file in the folder

                $user->image = $newFileName;
                $user->save();

                File::delete(public_path().'/backend/assets/images/profile/'.$oldImage);
            }          

            return redirect()->route('user-profile')->with('success','Employee added successfully.');           
        }else{
            //return with errors
            // return redirect()->route('user-profile');
            return redirect()->route('user-profile')->withErrors($validator)->withInput();
        }
        
        // dd($request->all());
    }
}
