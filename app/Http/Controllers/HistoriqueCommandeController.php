<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;
use App\Models\Produit;
use Illuminate\Support\Facades\Session; 
use Illuminate\Support\Facades\DB;

class HistoriqueCommandeController extends Controller
{
    public function order_history()
    {
        $orders = Commande::where('Id_Consommateur', Session::get('consumer')->Id_Consommateur)
                          ->orderBy('date_commande', 'desc')
                          ->get();
                     

foreach ($orders as $order) {
    $order->produits = DB::select("
    SELECT produits.*, quantite_produits.quantité_demande, MIN(images.URL) as URL
    FROM produits
    JOIN quantite_produits ON produits.Id_Produit = quantite_produits.Id_Produit
    LEFT JOIN images ON produits.Id_Produit = images.Id_Produit
    WHERE quantite_produits.Id_Commande = :commande
    GROUP BY produits.Id_Produit, quantite_produits.quantité_demande
", ['commande' => $order->Id_Commande]);

   
    $order->load('artisan','livreur');
}

return view('front_office/history',['orders' => $orders]);
    }
    
}
