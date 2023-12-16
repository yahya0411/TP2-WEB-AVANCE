<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class ProduitController extends Controller
{
    public function index()
    {
        $products = Produit::all();
        return view('front_office/home/product',['products'=> $products ]);
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
                $imageName = $product->nom_produit . ' -image- '. $image->extension();
                $image->move(public_path('product_image'),$imageName);

                Image::create([
                    'product_id' => $product->id,
                    'image' => $imageName
                ]);
            }

         }

        return  redirect()->route('product.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('backoffice.Products.show',['product' => Produit::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         return view('backoffice.Products.edit', ['product' => Produit::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Produit::findOrFail($id);
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
        $product = Produit::findOrFail($id);
        $product->delete();
        return  redirect()->route('product.index');
    }
    public function  searchProducts(Request $request)
    {
        
        // Récupérer les critères de recherche depuis la requête
        $keywords = $request->input('nom_produit'); 
        $category = $request->input('category');
        $subCategory = $request->input('sub_category');
        $stars = $request->input('stars');
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');

        // Logique de recherche en fonction des critères
        $query = Produit::query();
         
        if ($keywords) {
            $query->where('nom_produit', 'like', '%' . $keywords . '%');
        }

       else if ($category) {
            $query->where('Type_produit', $category);
        }

        else if ($subCategory) {
            $query->where('sous_type', $subCategory);
        }

       else if ($stars) {
            $query->where('stars', $stars);
        }

        else if ($minPrice) {
            $query->where('prix_par_piéce', '>=', $minPrice);
        }

       else if ($maxPrice) {
            $query->where('prix_par_piéce', '<=', $maxPrice);
        }

        $products = $query->get();
        
        // Retourner les résultats à la vue
       return view('front_office/home/product', ['products' => $products]);
      
    }
}
