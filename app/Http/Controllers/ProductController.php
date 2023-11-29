<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('backoffice.Products.index',['products'=> Product::all()]);
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
        $product = new Product();
        $product->nom_produit = $request->input('nameproduct');
        $product->description = $request->input('descriptionproduct');
        $product->prix_par_piéce = $request->input('priceproduct');
        $product->quantité_minimale = $request->input('quantityproduct');
        $product->type_produit = $request->input('typeproduct');
        $product->sous_type = $request->input('subtypeproduct');

        $product->save();

        if($request->has('images'))
         {
            foreach($request->file('images') as $image)
            {
                $imageName = $product->nom_produit . '-image' . $image->extension();
                $image->move(public_path('product_image'),$imageName);

                Image::create([
                    'product_id' => $product->id,
                    'image' => $imageName
                ]);
            }

         }
         $request->session()->flash('status','Inserting product');

        return  redirect()->route('product.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('backoffice.Products.show',['product' => Product::findOrFail($id),'images' => Image::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         return view('backoffice.Products.edit', ['product' => Product::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        $product->nom_produit = $request->input('nameproduct');
        $product->description = $request->input('descriptionproduct');
        $product->prix_par_piéce = $request->input('priceproduct');
        $product->quantité_minimale = $request->input('quantityproduct');
        $product->type_produit = $request->input('typeproduct');
        $product->sous_type = $request->input('subtypeproduct');
        $product->save();
        return  redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return  redirect()->route('product.index');


    }
}
