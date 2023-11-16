<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelpContactRequest;
use App\Models\Usercontact;
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
            'name'=> 'required',
            'email'=> 'required|email',
            'mobile'=> 'required',
            'skypid'=> 'required',
            'address'=> 'required',
            'country'=> 'required',
            'investment'=> 'required',
        ]);

        // dd($request->all());
        return back()->with('Success', 'Form Submitted Successfully');
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
            'full_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'skypid' => 'required',
            'city' => 'required',
            'address' => 'required',
            'pincode' => 'required',
            'image' => 'sometimes|image:gif,png,jpeg,jpg'
        ]);

        if ($validator->passes()){
            //Option #1
            //save data here
            // $employee = Employee::find($id);
            // $user->full_name = $request->full_name;
            // $employee->address = $request->address;
            // $user->save();

            // $employee = new Employee();
            // $employee->fill($request->post())->save();
            // $request->Session()-flash('success', 'Employee added successfully.');

            //Option #2
           $user->fill($request->post())->save();

            //Upload image here
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
