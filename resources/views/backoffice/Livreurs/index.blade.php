@extends('app.master')
@section('content')
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$products}}</h3>

                        <p>Product</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{route('productt.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                        <p>Type of product</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>

                        <p>The orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>

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
        labels: ['January', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun'],
        datasets: [{
          label: '# of Command',
          data: [12, 19, 3, 5, 2, 3],
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
    'Red',
    'Blue',
    'Yellow'
  ],
  datasets: [{
    label: 'My First Dataset',
    data: [300, 50, 100],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)'
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
          data: [12, 19, 3, 5, 2, 3],
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
        @include('backoffice.Livreurs.menu')
        @endsection

@endsection
