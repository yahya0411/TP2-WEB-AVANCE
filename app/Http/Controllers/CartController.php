<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $productId = $request->input('id_produit');
        $productName = $request->input('nom_produit');
        $price = $request->input('prixPiece');
        $quantity = $request->input('qte');
       
        $cart = session()->get('cart', []);
         
         
        $existingProductIndex = null;
    foreach ($cart as $index => $product) {
        
        if (isset($product[0]['name']) && $product[0]['name'] === $productName) {
            $existingProductIndex = $index;
            break;
        }
    }

    // Si le produit existe déjà, mettre à jour la quantité
   if ($existingProductIndex !== null) {
        $cart[$existingProductIndex][0]['quantity'] += $quantity;
    } 
   
    // Ajoutez le nouveau produit au panier
    else{
    $newProduct[] = [
        'id_produit' => $productId,
        'quantity' => $quantity,
        'name' => $productName,
        'price' => $price,
    ];

    // Mettez à jour le panier dans la session
    $cart[] = $newProduct;
}

    session(['cart' => $cart]);
    return view('front_office/home/cart')->with('cart', $cart);
   
    }
}
