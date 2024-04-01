<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function showLoginForm()
{
    return view('login');
}
    public function register(Request $request)
    {
        $password=$request->password;
        $cpassword=$request->cpassword;
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        if($password==$cpassword){
            // dd('yes');
            $createuser=User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            if($createuser){
                return redirect('/login')->with('success', 'Registration successful! Please log in.');
            }
            else{
                return redirect('/login')->with('error', 'Login Failed');
            }

            // dd($createuser);
            
        }
        else{
            // dd('no');
            return redirect('/login')->with('error', 'Password Do not match.');
        }
    } 

    public function signin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/check-migration')->with('success','logged in successfull');
        }
     
        return redirect('/login')->with('error', 'Invalid credentials. Please try again.');
        dd($request);
    }

    public function checkmigration()
    {
        return view('check-migration');
    }
}
