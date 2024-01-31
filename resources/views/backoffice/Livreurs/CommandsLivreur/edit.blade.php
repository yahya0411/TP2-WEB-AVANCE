@extends('app.master')

@section('content')
@section('title','Command details')
<div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Edit Product</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{route('mycommand.update', ['mycommand' => $commandsArtisan->Id_Commande])}}" method="POST">
            @csrf
            @method('PUT')
           <div class="row">
            <h4 class="col-md-6">Consumer : <b>Yahia Mekki</b></h4>
            <h4 class="col-md-6">Date : <b>{{$commandsArtisan->date_commande}}</b></h4>
           </div>
           <div class="row">
            <h4 class="col-md-6">Product : <b>
                @foreach ($products as $product)
                @foreach ($quantite_produits as $quantite_produit)

                        @if ($product->Id_Produit == $quantite_produit->Id_Produit)
                                {{$product->nom_produit}}
                                @break
                        @endif
                     @endforeach
            @endforeach
            </b></h4>
            <h4 class="col-md-6">Quantitiy : <b>
                @foreach ($quantite_produits as $quantite_produit)
                @if ($quantite_produit->Id_Commande == $commandsArtisan->Id_Commande)
                        {{$quantite_produit->quantité_demande}}
                        @break
                @endif
            @endforeach
            </b>
        </h4>
        </div>
        <div class="row">
            <h4 class="col-md-6">Status : <b class=" @if($commandsArtisan->état_commande == 'Refuse') text-danger @elseif ($commandsArtisan->état_commande == 'Acceptée') text-success @elseif ($commandsArtisan->état_commande == 'Affecter') text-primary @elseif ($commandsArtisan->état_commande == 'Livrer') text-info @else text-secondary @endif">{{$commandsArtisan->état_commande}}</b></h4>
        </div>
            <div class="row">
            <div class="col-md-6">
                    <label for=""></label>
                    <div class="form-group">
                        <select class="form-control" id="select1" name="etatc">
                            <option value="" disabled>status</option>
                            <option value="Acceptée">Acceptée</option>
                            <option value="Refuse">Refuse</option>
                            <option value="Affecter">Affecter a un livreur</option>

                        </select>
                      </div>
            </div>
            <div class="col-md-6">
                <label for=""></label>
                <div class="form-group">

                    <select class="form-control" id="select1" name="livreur">
                        <option value="" disabled>Livreur</option>
                        <option value="0">non</option>
                        @foreach ($livreurs as $livreur)
                        <option value="{{old('livreur',optional(optional($livreur ?? null))->Id_Livreur)}}">{{$livreur->nom_livreur}}</option>
                        @endforeach
                    </select>
                  </div>
        </div>
        </div>


            <div class="form-group">
            <button type="submit" class="btn btn-info"><i class="fa fa-edit"></i> Change</button>

     </div>
        </form>
    </div>
</div>
@section('menu')
@include('backoffice.Artisans.menu')
@endsection
@endsection
