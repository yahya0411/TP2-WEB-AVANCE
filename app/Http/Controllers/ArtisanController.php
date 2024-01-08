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
        
    
        $name_artisan = $request->input('artisan_name'); 
        $category = $request->input('type');
        $commune = $request->input('commune');
        $stars = $request->input('rating');
        
        $query = Artisan::query();
         
        if ($name_artisan) {
            $query->where('nom_artisan', 'like', '%' .$name_artisan . '%');
        }

       else if ($category) {
            $query->where('catégorie', $category);
        }

        else if ($commune) {
            $query->where('commune', $commune);
        }

       else if ($stars) {
        $query->leftJoin('evaluations', 'artisans.id_artisan', '=', 'evaluations.id_artisan')
        ->where('evaluations.Note', $stars);
        }

        $artisans = $query->get();
    

       return view('front_office/home/testimonial', ['artisans' => $artisans]);
      
    }
    
    public function ProfilArtisan(Request $request)
    {
        $param = $request->input('artisan');
        $artisan = Artisan::with('evaluations.consommateur')->where('nom_artisan', $param)->first();
        Session::put('id_artisan',$artisan->id_artisan);
        $artisan->load('evaluations.consommateur','produits');
        return view('front_office/home/artisanprof', ['artisan'=> $artisan]); 
    }

    
}
