<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;
use App\Models\Produit;
use App\Models\Quantite_produits;
use Illuminate\Support\Facades\DB;

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
    echo "<script> alert('order send to artisan') window.location.href='/'; </script>";
    }

}
