<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; 
use App\Models\Consommateur;
class ConsumerController extends Controller
{
    public function edit(string $id)
    {
        return view('front_office.home.edit',['consumer' => Consommateur::findOrFail($id)]);
        
    }
    
    public function update(Request $request, string $id)
    {
        $consumer = Consommateur::findOrFail($id);
        $consumer->nom_consommateur = $request->input('fn');
        $consumer->prénom_consommateur = $request->input('ln');
        $consumer->téléphone = $request->input('ph');
        $consumer->save();
    
        return redirect()->route('consommateur.edit', ['consommateur' => $consumer->Id_Consommateur]);
    }
    
   
}
