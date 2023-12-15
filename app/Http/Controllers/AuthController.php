<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function registerpost(Request $request)
    {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            return  back();


    }

    public function login()
    {
        return view('auth.login');
    }


    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($credetials))
        {
            return redirect('/artisan');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
