<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
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
                $imageName = $product->nom_produit . $image->extension();
                $image->move(public_path('img'),$imageName);

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
        return view('backoffice.Products.show',['productt' => Produit::findOrFail($id)]);
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
            $query->leftJoin('evaluations', 'produits.Id_Produit', '=', 'evaluations.Id_Produit')
            ->where('evaluations.Note', $stars);

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
    public function sortProducts( $sortType = null)
    {

        $query = Produit::query();
        switch ($sortType) {
            case 'price_low_high':
                $query->orderBy('prix_par_piéce');
                break;

            case 'price_high_low':
                $query->orderByDesc('prix_par_piéce');
                break;

            case 'rating_high_low':
                $query->leftJoin('evaluations', 'produits.Id_Produit', '=', 'evaluations.Id_Produit')
                ->select('produits.*', DB::raw('AVG(evaluations.Note) as avg_rating'))
                ->groupBy('produits.Id_Produit')
                ->orderBy('avg_rating', 'desc');
                break;

        }
        $products = $query->get();
        $products->load('images');
        return view('front_office/home/product', ['products' => $products]);
    }
    public function ProductDetails(Request $request)
    {
        if(Session::has('consumer')){
            $param = $request->input('produit');
            Session::put('id_produit',$param);
            $prod = Produit::with('evaluations.consommateur','artisan')->where('Id_Produit', $param)->first();
           //$prod->load('artisan', 'evaluations.consommateur');
            return view('front_office/home/product_consult', ['produit'=> $prod]);
        }
        else{
          echo " <script>alert('you need to rigster or connect'); window.location.href='/identification';</script>";
        }
        /*$param = $request->input('produit');
        $prod = Produit::with('evaluations.consommateur')->where('Id_Produit', $param)->first();
        $prod->load('artisan', 'evaluations.consommateur');
        return view('front_office/home/product_consult', ['produit'=> $prod]); */
    }
}
