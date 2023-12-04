@extends('app.master')

@section('content')

<div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Add Livreurs uct</h3>

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

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label>Non </label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name of product">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label>Prenom </label>
                  <input type="number" class="form-control" placeholder="Enter Number of quantity">
                 </div>
             </div>
             <div class="col-md-6">
                <div class="form-group">
                  <label>Nemero de telephone </label>
                  <input type="number" class="form-control" placeholder="Enter Number of quantity">
                 </div>
             </div>
             <div class="col-md-6">
                <div class="form-group">
                  <label>Email </label>
                  <input type="number" class="form-control" placeholder="Enter Number of quantity">
                 </div>
             </div>
             <div class="col-md-6">
                <div class="form-group">
                  <label>Disponibilté </label>
                  <input type="number" class="form-control" placeholder="Enter Number of quantity">
                 </div>
             </div>

        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                      <textarea class="form-control" rows="3" placeholder="Enter description of delivery" data-lt-tmp-id="lt-685507" spellcheck="false" data-gramm="false"></textarea>
                    </div>

            </div>
                <div class="col-md-6">
                    <label> </label>

                    <div class="form-group">
                    <button type="button" class="btn btn-primary btn-block"><i class="fa fa-plus"></i> Add product</button>
                    </div>
             </div>


        </div>
    </div>
</div>

@section('title','Livreurs')

@section('menu')
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-book"></i>
        <p>
            Livreurs
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-book"></i>
        <p>
            Accpeter/refuser livraison
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
        Suivi des Commandes 
        </p>
    </a>
</li>

@endsection
@endsection
