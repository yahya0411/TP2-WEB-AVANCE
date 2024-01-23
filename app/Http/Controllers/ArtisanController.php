<?php

namespace App\Http\Controllers;
use App\Models\Artisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\Produit;
use App\Models\Commande;
use App\Models\User;
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

    public function index2()
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

    public function index()
    {
        //
                $nom_artisan = Session::get('artisan')->nom_artisan;
                $id_artisan = Session::get('artisan')->id_artisan;
        return view('backoffice.Artisans.index',['id'=>$id_artisan,'nom_artisan'=>$nom_artisan,'products' => Produit::all()->count()]);
    }

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
        $artisan = Artisan::findOrFail($id);
        $user = User::findOrFail($artisan->ID_User);
        $id = Session::get('artisan')->id_artisan;
        $nom_artisan = Session::get('artisan')->nom_artisan;

      //  dd($user);
        return view('backoffice.Artisans.edit', compact('nom_artisan','id','artisan','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $artisan = Artisan::findOrFail($id);
        $user = User::findOrFail($artisan->ID_User);
      $artisan->nom_artisan = $request->input('nom_artisan');
        $artisan->Email = $request->input('Email');
        $user->Email = $request->input('Email');
        $user->mdps = $request->input('mdps');
        $artisan->save();
        $user->save();
        return  redirect()->route('artisan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function command()
    {
        $id = Session::get('artisan')->id_artisan;
        $artisan = Artisan::findOrFail($id);
        $commands = Commande::where('id_artisan','=',$artisan->id_artisan)->get();
        $nom_artisan = Session::get('artisan')->nom_artisan;
        
        return view('backoffice.Artisans.CommandsArtisan.index',compact('id','nom_artisan','artisan','commands'));
    }
}
