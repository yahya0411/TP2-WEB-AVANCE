<?php

namespace App\Http\Controllers;
use App\Models\Artisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; 
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

        $artisans = $query->get();

        // Retourner les résultats à la vue
       return view('front_office/home/testimonial', ['artisans' => $artisans]);
      
    }
    
    public function ProfilArtisan(Request $request)
    {
        $artisan = $request->input('artisan');
        

        return view('front_office/home/artisanprof', ['artisan'=> $artisan]); 
    }

    
}
