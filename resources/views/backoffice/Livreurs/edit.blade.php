@extends('app.master')
@section('content')
<div class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
      <a href=""> <i class="fas fa-users"></i></a>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <form action="{{route('livreur.update',['livreur' => $livreur->Id_Livreur])}}" method="post">
            @csrf
            @method('PUT')
          <div class="input-group mb-3">
            <input type="text" name="nom_livreur" value="{{old('nom_livreur',optional($livreur ?? null)->nom_livreur)}}" class="form-control" placeholder="Full name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" name="Email" value="{{old('Email',optional($livreur ?? null)->Email)}}" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="mdps" value="{{old('mdps',optional($user ?? null)->mdps)}}" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>

          </div>
            <div class="form-group mb-3">
                <label for="dispo">Disponiblité</label>
                <select class="form-control" id="select1" name="dispo">
                    <option value="" default disabled>Disponiblité</option>
                    <option value="oui">Oui</option>
                    <option value="non">Non</option>

                </select>
              </div>

          <div class="row">
            <div class="col-8">

            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block"> <i class="fas fa-edit"></i> Edit</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
</div>
  @section('menu')
  @include('backoffice.Livreurs.menu')
  @endsection
@endsection
