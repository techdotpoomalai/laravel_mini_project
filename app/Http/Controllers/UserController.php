<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userloginmodel;
use App\Models\usermodel;

class UserController extends Controller
{
    public function home(Request $request){
        return view('home');
    }
    public function signin_view(Request $request){ 
        return view('signin');
    }

    public function signup_view(Request $request){
        return view('signup');
    }

    public function signin(Request $request){
        $username = $request->username; // Get email from request
        if (Usermodel::where('email', $username)->exists()) {
            $user = new userloginmodel();
            $user->username = $request->username;
            $user->password = $request->password;
            try{
                $user->save();
                return redirect()->route('userpage')->with('success', 'Signin successful.');
            } catch (\Exception $e) {
                return redirect()->route('signinpage')->with('error', 'Signin failed. Please Signup.');
            }
        } else {
            return redirect()->route('signuppage')->with('error', 'Please Signup.');
        }

        
    }

    public function signup(Request $request){
        $user = new usermodel();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password; // Hash password
        $user->number = $request->number;

        try {
            $user->save();
            return redirect()->route('signinpage')->with('success', 'Registration successful! Please sign in.');
        } catch (\Exception $e) {
            return redirect()->route('signuppage')->with('error','Registration failed. Please try again.') ;
        }
    }
    public function user_view(Request $request){
        $users = Usermodel::all();
        return view('user_list', ['users' => $users]);
    }
    public function logout(Request $request){

    }
}
