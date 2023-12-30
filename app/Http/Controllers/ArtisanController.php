<?php

namespace App\Http\Controllers;
use App\Models\Artisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; 
use Illuminate\Support\Facades\DB;
class ArtisanController extends Controller
{
    /*
    public function afficherForm()
    {
        return view('backoffice.Consommateurs.formulaire-recherche');
    }
    public function rechercheArtisans(Request $request)
    {
        $nom = $request->input('nom');
        $typeProduit = $request->input('type_produit');

        $artisans = Artisan::where('nom_artisan', 'like', "%$nom%")
                             ->where('catégorie', 'like', "%$typeProduit%")
                          ->get();

        return view('backoffice.Consommateurs.recherche-artisans', ['artisans' => $artisans]);
    }*/

    public function index()
    {
        $artisans = Artisan::all();
        return view('front_office/home/testimonial',['artisans'=> $artisans ]);
    }
    public function  searchArtisans(Request $request)
    {
        
        // Récupérer les critères de recherche depuis la requête
        $name_artisan = $request->input('artisan_name'); 
        $category = $request->input('type');
        $commune = $request->input('commune');
        $stars = $request->input('stars');

        // Logique de recherche en fonction des critères
        $query = Artisan::query();
         
        if ($name_artisan) {
            $query->where('nom_artisan', 'like', '%' .$name_artisan . '%');
        }

       else if ($category) {
            $query->where('catégorie', $category);
        }

       

       else if ($stars) {
            $query->where('stars', $stars);
        }

        else if ($commune) {
            $query->where('commune', 'like', '%' .$commune . '%');
        }
        $query->leftJoin('evaluations', 'artisans.id_artisan', '=', 'evaluations.id_artisan')
                ->select('artisans.*', DB::raw('AVG(evaluations.Note) as avg_rating'))
                ->groupBy('artisans.id_artisan');
        $artisans = $query->get();

       return view('front_office/home/testimonial', ['artisans' => $artisans]);
      
    }
    
    public function ProfilArtisan(Request $request)
    {
        $param = $request->input('artisan');
        $artisan = Artisan::where('nom_artisan', $param)->first();

        $products = $artisan->produits;
        return view('front_office/home/artisanprof', ['artisan'=> $artisan]); 
    }

    
}
