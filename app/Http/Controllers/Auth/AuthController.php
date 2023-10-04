<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Register()
    {
        return view('register');
    }

    public function RegisterPost(Request $request)
    {
        $user = new User;
        $user->name =  $request->name;
        $user->email = $request->email;
        $user->type =  $request->type;
        $user->password = Hash::make($request->password);
        $user->save();
        return back()->with('success', 'Register Succesfully');
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials)){

            if(auth()->user()->type == 'admin') {

                return redirect('/admin')->with('success', 'login Succesful');

            }
            elseif(auth()->user()->type == 'user') {

                return redirect('/')->with('success', 'login Successful');
            }
        }
        return back()->with('error', 'login failed');
    }  
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }

}
