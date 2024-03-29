<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Consommateur;
use App\Models\Artisan;
use App\Models\Livreur;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('front_office/identification');
    }
    public function loginPost(Request $request)
    {
        $credetials = [
            'Email' => $request->Email,
            'mdps' => $request->mdps,
        ];
        $user = User::where('Email' , '=' ,$request->Email)->first();
        if($user && $request->mdps == $user->mdps)
        {
            switch ($user->Role) {

                case 'Artisan':
                    $artisan = Artisan::where('Email' , '=' ,$request->Email)->first();
                    Session::put('artisan',$artisan);
                    return Redirect::route('artisan.index')->with('success','Login successful');
                    break;
                case 'Consommateur':
                    $consumer = Consommateur::where('Email' , '=' ,$request->Email)->first();
                    $password = $user->mdps;
                    Session::put('consumer',$consumer);
                    Session::put('password',$password);
                    return Redirect::route('home')->with('success', 'Login successful');
                    break;
                case 'Livreur':
                    $livreur = Livreur::where('Email' , '=' ,$request->Email)->first();
                    Session::put('Livreur',$livreur);
                    return Redirect::route('livreur.index')->with('success', 'Login successful');
                    break;

        }
    }
    else{
        echo "
        <script>alert('Email or Password incorrect'); window.location.href='/identification';</script>
        ";
      }
    }
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('home');
    }
}
