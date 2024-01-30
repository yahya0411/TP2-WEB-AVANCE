@extends('app.master')
@section('content')
@section('custum_style')
<link rel="stylesheet" href="{{asset('custumStyle/product.css')}}">
@endsection
<div class="card">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fas fa-box mr-1"></i>
        Details of product
      </h3>
      <div class="card-tools">
        <ul class="nav nav-pills ml-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#revenue-chart" data-toggle="tab"> Product Information</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#sales-chart" data-toggle="tab">Product Commands</a>
          </li>
        </ul>
      </div>
    </div><!-- /.card-header -->
    <div class="card-body">
      <div class="tab-content p-0">
        <!-- Morris chart - Sales -->
        <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
            <div class="row">
                <div class="col-md-7">
                    <div class="card-body">
                        <div class="row">
                            @foreach ($images as $image)
                            <div class="col-md-4">
                                <img src='{{asset("/img/$image->URL")}}' class="img-fluid mb-2" alt="white sample"/>

                          </div>
                        @endforeach
                        </div>

                </div>
                </div>
                <div class="col-md-5">
                   <h3 class="product-title">
                    {{$product->nom_produit}}
                    </h3>
              <div class="rating">
                  <div class="stars">
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                  </div>
                  <span class="review-no">41 reviews</span>
              </div>
              <p class="product-description">{{$product->description}}.</p>
              <h4 class="price"> unite price: <span>DZ {{$product->prix_par_piéce}}</span></h4>

                </div>
            </div>
         </div>
        <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Consummers </h3>
                </div>
                <div class="card-body p-0">
                <table class="table table-striped">
                <thead>
                <tr>
                <th>Consumer name</th>
                <th>Command date</th>
                <th>Etat</th>
                <th>Address</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($commands as $command )
                @foreach ($Quantite_produits as $Quantite_produit )

                @if($command->Id_Commande == $Quantite_produit->Id_Commande)
                {
                    <td>{{$command->consommateur->nom_consommateur}} {{$command->consommateur->prénom_consommateur}}</td>
                    <td>{{$command->date_commande}}</td>
                    <td>{{$command->adresse_livraison}}</td>
                    <td> <span class="badge @if($command->état_commande == 'Refuse') badge-danger @elseif ($command->état_commande == 'Acceptée') badge-success @elseif ($command->état_commande == 'Affecter') badge-primary @elseif ($command->état_commande == 'Livrer') badge-info @else badge-secondary @endif ">{{$command->état_commande}}</span></td>
                }
                @endif
                @endforeach
                @endforeach
                </tbody>
                </table>
                </div>

                </div>
        </div>
      </div>
    </div><!-- /.card-body -->
  </div>
  @section('script')

  <script>
    $(function () {
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: true
        });
      });

      $('.filter-container').filterizr({gutterPixels: 3});
      $('.btn[data-filter]').on('click', function() {
        $('.btn[data-filter]').removeClass('active');
        $(this).addClass('active');
      });
    })
  </script>
  @endsection

@section('menu')
@include('backoffice.Artisans.menu')
@endsection
@endsection
