<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('backoffice.Products.index',['products'=> Produit::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.Products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Produit();
        $product->nom_produit = $request->input('nom_produit');
        $product->description = $request->input('description');
        $product->prix_par_piéce = $request->input('prix_par_piéce');
        $product->quantité_minimale = $request->input('quantité_minimale');
        $product->type_produit = $request->input('Type_produit');
        $product->sous_type = $request->input('sous_type');

        $product->save();

        if($request->has('images'))
         {
            foreach($request->file('images') as $image)
            {
                $imageName = $product->nom_produit . '.'. $image->extension();
                $image->move(public_path('img'),$imageName);

                Image::create([
                    'Id_Produit' => $product->Id_Produit,
                    'URL' => $imageName
                ]);
            }

         }
         $request->session()->flash('status','Inserting product');

        return  redirect()->route('productt.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $Id_Produit)
    {           $product = Produit::findOrFail($Id_Produit);
                $images = $product->images;

        return view('backoffice.Products.show',compact('product','images'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $Id_Produit)
    {   $product = Produit::findOrFail($Id_Produit);
         return view('backoffice.Products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $Id_Produit)
    {
        $product = Produit::findOrFail($Id_Produit);
        $product->nom_produit = $request->input('nom_produit');
        $product->description = $request->input('description');
        $product->prix_par_piéce = $request->input('prix_par_piéce');
        $product->quantité_minimale = $request->input('quantité_minimale');
        $product->type_produit = $request->input('Type_produit');
        $product->sous_type = $request->input('sous_type');
        $product->save();
        return  redirect()->route('productt.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $Id_Produit)
    {
        $product = Produit::findOrFail($Id_Produit);
        $product->delete();

        return  redirect()->route('productt.index');


    }
    public function images($Id_Produit)
    {
        $product = Produit::findOrFail($Id_Produit);
    }
}
