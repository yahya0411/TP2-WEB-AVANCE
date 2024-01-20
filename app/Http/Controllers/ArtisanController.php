<?php

namespace App\Http\Controllers;
use App\Models\Artisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\Produit;
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


    /**
     * Display a listing of the resource.
     */
   /* public function index()
    {
        //
        return view('backoffice.Artisans.index',['products' => Produit::all()->count()]);
    }*/

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
