<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evaluation;
class EvaluationController extends Controller
{
    public function ProductSendReview(Request $request)
    {
      
     $evaluation = Evaluation::create([
        'type_evaluation' => $request->input('type_evaluation'),
        'commentaire' => $request->input('comment'),
        'Note' => $request->input('rate'),
        'Id_Consommateur'  => $request->input('id_consumer'),
        'Id_Produit'  => $request->input('id_produit'),
    ]);
       
    echo "
    <script> window.location.href='/product';</script>
    ";
    }
    public function ArtisanSendReview(Request $request)
    {
     
     $evaluation = Evaluation::create([
        'type_evaluation' => $request->input('type_evaluation'),
        'commentaire' => $request->input('comment'),
        'Note' => $request->input('rate'),
        'Id_Consommateur'  => $request->input('id_consumer'),
        'id_artisan'  => $request->input('id_artisan'),
    ]);
       
    echo "
    <script> window.location.href='/Testimonial';</script>
    ";
    }

    public function setReviewId($id_livreur)
    {
        session(['review_id_livreur' => $id_livreur]);
        return redirect()->route('review');
    }
    

   
    public function DeliverySendReview(Request $request)
    {
         
        echo $request->input('rate');
     
     $evaluation = Evaluation::create([
        'type_evaluation' => $request->input('type_evaluation'),
        'commentaire' => $request->input('comment'),
        'Note' => $request->input('rate'),
        'Id_Consommateur'  => $request->input('id_consumer'),
        'Id_Livreur'  => $request->input('id_livreur'),
    ]);
       
    echo "
    <script> window.location.href='/history';</script>
    ";
    }
}
