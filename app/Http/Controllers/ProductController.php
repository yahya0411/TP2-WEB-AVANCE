<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Image;
use Illuminate\Support\Facades\Session;
use App\Models\Commande;
use App\Models\Quantite_produits;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nom_artisan = Session::get('artisan')->nom_artisan;
        $id = Session::get('artisan')->id_artisan;
        $product = Produit::where('id_artisan' ,'=', $id)->get();
        //dd($id);
        return view('backoffice.Products.index',['id'=>$id,'nom_artisan' => $nom_artisan,'products'=> $product]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nom_artisan = Session::get('artisan')->nom_artisan;
        $id = Session::get('artisan')->id_artisan;
        return view('backoffice.Products.create',compact('id','nom_artisan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id_artisan = Session::get('artisan')->id_artisan;
        $product = new Produit();

        $product->nom_produit = $request->input('nom_produit');
        $product->description = $request->input('description');
        $product->prix_par_piéce = $request->input('prix_par_piéce');
        $product->quantité_minimale = $request->input('quantité_minimale');
        $product->type_produit = $request->input('Type_produit');
        $product->sous_type = $request->input('sous_type');
        $product->id_artisan = $id_artisan;
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
                $nom_artisan = Session::get('artisan')->nom_artisan;
                $id = Session::get('artisan')->id_artisan;
                $Quantite_produits = Quantite_produits::where('id_produit','=',$Id_Produit)->get();
            
                $commands = Commande::all();

        return view('backoffice.Products.show',compact('product','images','id','nom_artisan','Quantite_produits','commands'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $idp)
    {
        $nom_artisan = Session::get('artisan')->nom_artisan;
        $id = Session::get('artisan')->id_artisan;

         return view('backoffice.Products.edit', ['product' => Produit::findOrFail($idp),'id'=>$id,'nom_artisan'=>$nom_artisan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Produit::findOrFail($id);
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
