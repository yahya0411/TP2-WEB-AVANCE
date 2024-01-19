<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Consommateur;
use App\Models\Artisan;
use App\Models\Livreur;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{


 public function handleInscription(Request $request)
{

    $request->validate([
        'Email' => 'required|email|unique:users,Email',
        'mdps' => 'required|min:4',
    ]);

   $user = User::create([
        'Email' => $request->input('Email'),
        'mdps' => $request->input('mdps'),
        'Role' => $request->input('Role'),
    ]);


if ($request->input('Role') == 'Consommateur') {
    $user->consommateur()->create([
        'nom_consommateur' => $request->input('nom_user'),
        'prénom_consommateur' => $request->input('prénom_user'),
        'téléphone' => $request->input('téléphone'),
        'Email' => $request->input('Email'),
    ]);
}


    elseif ($request->input('Role') == 'Artisan') {
        $user->artisan()->create([
            'nom_artisan' => $request->input('nom_user'),
            'téléphone' => $request->input('téléphone'),
            'Email' => $request->input('Email'),
        ]);
    }

    elseif($request->input('Role') == 'Livreur'){
        $user->livreur()->create([
            'nom_livreur' => $request->input('nom_user'),
            'prénom_livreur' => $request->input('prénom_user'),
            'téléphone' => $request->input('téléphone'),
            'Email' => $request->input('Email'),
        ]);
    }
    return Redirect::route('identification.signup');
  }


  }

