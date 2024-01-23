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
            <h4 class="col-md-6">Product : <b>{{$commandsArtisan->date_commande}}</b></h4>
            <h4 class="col-md-6">Quantitiy : <b>{{$commandsArtisan->date_commande}}</b></h4>
        </div>
        <div class="row">
            <h4 class="col-md-6">Status : <b>{{$commandsArtisan->état_commande}}</b></h4>
            <div class="col-md-6">

                    <div class="form-group">
                        <select class="form-control" id="select1" name="status">
                            <option value="">En attente</option>
                            <option value="">En attente</option>
                            <option value="">En attente</option>
                            <option value="">En attente</option>

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
