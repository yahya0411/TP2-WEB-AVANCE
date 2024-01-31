@extends('app.master')
@section('content')
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>
                            @php

                            $pr = App\Models\Produit::where('id_artisan', Session('artisan')->id_artisan)->get();echo $pr->count();
                            @endphp



                        </h3>

                        <p>Product</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{route('productt.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>
                            @php

                            $pr = App\Models\Livreur::all();echo $pr->count();
                            @endphp


                        </h3>

                        <p>Delivery</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>
                            @php

    $pr = App\Models\Commande::where('id_artisan', Session('artisan')->id_artisan)->get();echo $pr->count();
    @endphp
                        </h3>

                        <p>Consumers commands</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-7">
                <div class="card card-default">
                    <div class="card-header">
                    <h3 class="card-title">Monthly commands</h3>
                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                    </button>
                    </div>
                    </div>
                    <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas id="myChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 488px;" width="488" height="250" class="chartjs-render-monitor"></canvas>
                    </div>

                    </div>
            </div>
            <div class="col-md-5">
                <div class="card card-default">
                    <div class="card-header">
                    <h3 class="card-title">Products Types</h3>
                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                    </button>
                    </div>
                    </div>
                    <div class="card-body">
                        <div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas id="myChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 250px%; display: block; width: 488px;" width="488" height="250" class="chartjs-render-monitor"></canvas>
                    </div>

                    </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                            <h3 class="card-title">Monthly Earning</h3>
                        <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                        </button>
                        </div>
                        <div class="card-body">
                            <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                            <canvas id="myChart3" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 488px;" width="488" height="250" class="chartjs-render-monitor"></canvas>
                    </div>

                </div>
            </div>
        </div>

        <!-- Main row -->

        <!-- /.row (main row) -->





        

@section('script')
<script>
    const ctx = document.getElementById('myChart');
    const ctx2 = document.getElementById('myChart2');
    const ctx3 = document.getElementById('myChart3');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['January', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun','July','Aug','Sep','Oct','Nov','Dec'],
        datasets: [{
          label: 'Number of Commands',
          data: [
           @php
           $cmd = DB::table('commandes')->whereMonth('created_at', '=', '01')->get();
           echo $cmd->count();
           @endphp

          ,
          @php
           $cmd2 = DB::table('commandes')->whereMonth('created_at', '=', '02')->get();
           echo $cmd2->count();
           @endphp


          ,
          @php
           $cmd3 = DB::table('commandes')->whereMonth('created_at', '=', '03')->get();
           echo $cmd3->count();
           @endphp

          ,
          @php
           $cmd4 = DB::table('commandes')->whereMonth('created_at', '=', '04')->get();
           echo $cmd4->count();
           @endphp


          ,
          @php
           $cmd5 = DB::table('commandes')->whereMonth('created_at', '=', '05')->get();
           echo $cmd5->count();
           @endphp
          ,
          @php
           $cmd6 = DB::table('commandes')->whereMonth('created_at', '=', '06')->get();
           echo $cmd6->count();
           @endphp,
           @php
           $cmd7 = DB::table('commandes')->whereMonth('created_at', '=', '07')->get();
           echo $cmd7->count();
           @endphp,
           @php
           $cmd8 = DB::table('commandes')->whereMonth('created_at', '=', '08')->get();
           echo $cmd8->count();
           @endphp,
           @php
           $cmd9 = DB::table('commandes')->whereMonth('created_at', '=', '09')->get();
           echo $cmd9->count();
           @endphp,
           @php
           $cmd10 = DB::table('commandes')->whereMonth('created_at', '=', '10')->get();
           echo $cmd10->count();
           @endphp,
           @php
           $cmd11 = DB::table('commandes')->whereMonth('created_at', '=', '11')->get();
           echo $cmd11->count();
           @endphp,
           @php
           $cmd12 = DB::table('commandes')->whereMonth('created_at', '=', '12')->get();
           echo $cmd12->count();
           @endphp
        ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });

    new Chart(ctx2, {
        type: 'doughnut',
  data: {
    labels: [
    'Sweety',
    'Salty',

  ],
  datasets: [{
    label: 'Number of products',

    data: [@php

    $pr = App\Models\Produit::where('Type_produit', 'sucre')->get();echo $pr->count();
    @endphp, @php

$pr = App\Models\Produit::where('Type_produit', 'salle')->get();echo $pr->count();
@endphp],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)'
    ],
    hoverOffset: 4
  }]
  },


    });



    new Chart(ctx3, {
        type: 'bar',
        data: {
        labels: ['January', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun'],
        
        datasets: [{
          label: '# dz',
          @php
    $totalSum = 0; 
    $orders = App\Models\Commande::where('id_artisan','=', $id)
    ->get();
@endphp





@foreach ($orders as $order)
  
        

        
            @php
                $totalPrice = 0;
                foreach ($order->produits as $produit) {
                    $totalPrice += $produit->quantité_demande * $produit->prix_par_piéce;
                }
                $totalSum += $totalPrice; 
                // @dd($order->produits);
            @endphp
           
        
    
@endforeach
          data: [  @php echo $$order->produits  @endphp , 19, 3, 5, 2, 3],
          backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
          borderWidth: 1
        }]
      },
    });
  </script>

@endsection

        @section('title','Artisans')
        @section('menu')
        @include('backoffice.Artisans.menu')
        @endsection

@endsection
