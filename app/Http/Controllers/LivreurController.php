<?php

namespace App\Http\Controllers;
use App\Models\Livreur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\Produit;
use App\Models\Commande;
use App\Models\User;
class LivreurController extends Controller
{



    public function index()
    {
        //

                $nom = Session::get('Livreur')->nom_livreur;
                $id_Livreur = Session::get('Livreur')->Id_Livreur;

        return view('backoffice.Livreurs.index',['id'=>$id_Livreur,'nom'=>$nom,'products' => Produit::all()->count()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $livreur = Livreur::findOrFail($id);
        $user = User::findOrFail($livreur->ID_User);
        $id = Session::get('Livreur')->id_Livreur;
        $nom = Session::get('Livreur')->nom_Livreur;

      //  dd($user);
        return view('backoffice.Livreurs.edit', compact('nom','id','livreur','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $livreur = Livreur::findOrFail($id);
        $user = User::findOrFail($livreur->ID_User);
      $livreur->nom_Livreur = $request->input('nom_livreur');
        $livreur->Email = $request->input('Email');
        $user->Email = $request->input('Email');
        $user->mdps = $request->input('mdps');
        $livreur->save();
        $user->save();
        return  redirect()->route('livreur.index');
    }

   public function destroy(string $id)
    {
        //
    }

}
