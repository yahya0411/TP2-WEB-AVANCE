<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;
use App\Models\Produit;
use App\Models\Quantite_produits;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Artisan;
use App\Models\Consommateur;
use App\Models\Livreur;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class CommandeController extends Controller
{
    public function show_data_cart()
    {
      $cart = session()->get('cart', []);
      return view('front_office/home/checkout')->with('cart', $cart);
    }
    public function send_order(Request $request)
    {
      $id_produits =  $request->input('id_produits');
       $artisan = null;
        $produits = Produit::with('artisan')->whereIn('Id_Produit', $id_produits)->get();

        if ($produits->count() > 0) {
          $id_artisan = $produits[0]->id_artisan;

          for ($i = 1; $i < count($produits); $i++) {
              if ($produits[$i]->id_artisan != $id_artisan) {

                  break;
              }
          }

          $artisan = $produits[0]->artisan->id_artisan;
      }

      $commande = Commande::create([
        'date_commande' => DB::raw('CURRENT_TIMESTAMP'),
        'adresse_livraison' => $request->input('address_livraison'),
        'état_commande' => $request->input('etat_commande'),
        'id_artisan' => $artisan,
        'Id_Consommateur'  => $request->input('id_consumer'),
    ]);
    $lastCommande = Commande::latest('Id_Commande')->first();

    if ($lastCommande) {
        $lastIdCommande = $lastCommande->Id_Commande;
    } else {
        // Aucune commande n'a été trouvée
        dd('Aucune commande trouvée.');
    }

      $quantities = $request->input('quantities');
      for ($i = 0; $i < count($id_produits); $i++) {
        Quantite_produits::create([
            'Id_Produit' => $id_produits[$i],
            'Id_Commande' => $lastIdCommande,
            'quantité_demande' => $quantities[$i],
        ]);
    }
    return Redirect::route('history');
    }

    public function commandsArtisan()
    {
        $id = Session::get('artisan')->id_artisan;
        $artisan = Artisan::findOrFail($id);
        $commands = Commande::where('id_artisan','=',$artisan->id_artisan)->get();
        $consumers = Consommateur::all();
        $products = Produit::all();
        $quantite_produits = Quantite_produits::all();
      //  dd($commands->Id_Consommateur);
        $nom = Session::get('artisan')->nom_artisan;

        return view('backoffice.Artisans.CommandsArtisan.index',compact('id','consumers','products','nom','artisan','commands','quantite_produits'));
    }
    public function commandsLivreur()
    {

        $id = Session::get('Livreur')->Id_Livreur;
      //  dd(Session::get('Livreur'));
     $livreur = Livreur::findOrFail($id);
        $commands = Commande::where('Id_Livreur','=',$id)->get();

        $consumers = Consommateur::all();
        $products = Produit::all();
        $quantite_produits = Quantite_produits::all();
      //  dd($commands->Id_Consommateur);
        $nom = Session::get('Livreur')->nom_livreur;

        return view('backoffice.Livreurs.CommandsLivreur.index',compact('id','consumers','products','nom','commands','quantite_produits'));
    }
    public function edit(string $Id_Commande)
    {           $products = Produit::all();
        $quantite_produits = Quantite_produits::all();
        $comm = Commande::findOrFail($Id_Commande);
        $Livreurs = Livreur::where('Disponibilité','=','oui')->get();
        $idp = 0;
        $nom = " ";
        if(Session::has('artisan'))
         {
            $idp = Session::get('artisan')->id_artisan;
            $nom = Session::get('artisan')->nom_artisan;
            return view('backoffice.Artisans.CommandsArtisan.edit', ['products' =>$products,'quantite_produits'=> $quantite_produits,'livreurs' => $Livreurs,'commandsArtisan' => $comm,'id'=>$idp,'nom'=>$nom]);


         }else if(Session::has('artisan')) {
            $idp = Session::get('livreur')->Id_Livreur;
            $nom = Session::get('livreur')->nom_livreur;
            return view('backoffice.Artisans.CommandsArtisan.edit', ['products' =>$products,'quantite_produits'=> $quantite_produits,'livreurs' => $Livreurs,'commandsArtisan' => $comm,'id'=>$idp,'nom'=>$nom]);

         }

    }
    public function editli(string $Id_Commande)
    {           $products = Produit::all();
        $quantite_produits = Quantite_produits::all();
        $comm = Commande::findOrFail($Id_Commande);
       // $Livreurs = Livreur::all();
     //   $nom_artisan = Session::get('artisan')->nom_artisan;
        $idp = Session::get('Livreur')->Id_Livreur;

         return view('backoffice.Livreurs.CommandsLivreur.edit', ['products' =>$products,'quantite_produits'=> $quantite_produits,'commandsArtisan' => $comm,'id'=>$idp,'nom'=>$nom_artisan]);
    }
    public function update(Request $request, string $id)
    {
        $ida = Session::get('artisan')->id_artisan;
        $comm = Commande::findOrFail($id);
   //     $user = User::findOrFail($artisan->ID_User);
        $comm->id_artisan = $ida;
        $comm->Id_Livreur = $request->input('livreur');
        $comm->état_commande = $request->input('etatc');
        $comm->save();
        return  redirect()->route('command_artisan');
    }
    public function store(Request $request ,string $id)
    {

    }

}
