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
                                <img src='{{asset("/img/$image->name")}}' class="img-fluid mb-2" alt="white sample"/>

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
                <th style="width: 10px">#</th>
                <th>Consummer</th>
                <th>Command date</th>
                <th>Etat</th>
                <th>Address</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>1.</td>
                <td>Update software</td>
                <td>
                25/10/2023
                </td>
                <td><span class="badge bg-danger">refuser</span></td>
                <td>Tlemcen</td>
                </tr>
                <tr>
                <td>2.</td>
                <td>Clean database</td>
                <td>
                01/12/2023
                </td>
                <td><span class="badge bg-warning">non traiter</span></td>
                <td>Tlemcen</td>
                </tr>
                <tr>
                <td>3.</td>
                <td>Cron job running</td>
                <td>
                12/11/2023
                </td>
                <td><span class="badge bg-info">Envoyer</span></td>
                <td>Tlemcen</td>
                </tr>
                <tr>
                <td>4.</td>
                <td>Fix and squish bugs</td>
                <td>
                10/11/2023
                </td>
                <td><span class="badge bg-success">Livrer</span></td>
                <td>Tlemcen</td>
                </tr>
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
