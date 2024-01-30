@extends('layouts.master')
@section('content')
@section('Mystyle')

<link href="{{asset('css/product.css')}}" rel="stylesheet">
@endsection


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5 pb-3">
            <!-- <h1 class="display-4 text-white animated slideInDown mb-3">Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Products</li>
                </ol>
            </nav> -->
            <div class="s008">
                <form   method="get">

                  <div class="inner-form">
                    <div class="basic-search">
                      <div class="input-field">
                        <input id="search" type="text" placeholder="Type Keywords" name="nom_produit" />
                        <div class="icon-wrap">
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                            <path d="M18.869 19.162l-5.943-6.484c1.339-1.401 2.075-3.233 2.075-5.178 0-2.003-0.78-3.887-2.197-5.303s-3.3-2.197-5.303-2.197-3.887 0.78-5.303 2.197-2.197 3.3-2.197 5.303 0.78 3.887 2.197 5.303 3.3 2.197 5.303 2.197c1.726 0 3.362-0.579 4.688-1.645l5.943 6.483c0.099 0.108 0.233 0.162 0.369 0.162 0.121 0 0.242-0.043 0.338-0.131 0.204-0.187 0.217-0.503 0.031-0.706zM1 7.5c0-3.584 2.916-6.5 6.5-6.5s6.5 2.916 6.5 6.5-2.916 6.5-6.5 6.5-6.5-2.916-6.5-6.5z"></path>
                          </svg>
                        </div>
                      </div>
                    </div>
                    <div class="advance-search">
                      <span class="desc">Advanced Search</span>
                      <div class="row">
                        <div class="input-field">
                          <div class="input-select">
                            <select data-trigger="" name="category">
                              <option placeholder="" value="">Category</option>
                              @foreach ($products as $product)
                              <option value="{{$product->Type_produit}}">{{$product->Type_produit}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="input-field">
                          <div class="input-select">
                            <select data-trigger="" name="sous_category">
                              <option placeholder="" value="">Sub Category</option>
                              @foreach ($products as $product)
                              <option value="{{$product->sous_type}}">{{$product->sous_type}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>

                        <div class="input-field">
                          <div class="input-select">
                            <select id="star-rating" name="stars">
                              <option placeholder="" value="">Stars</option>
                            <option value="1">1 star</option>
                            <option value="2">2 stars</option>
                            <option value="3">3 stars</option>
                            <option value="4">4 stars</option>
                            <option value="5">5 stars</option>
                          </select>
                        </div>
                      </div>


                      </div>

                      <div class="row second">

                                    <div class="card">
                                      <div class="price-content">
                                        <div>
                                          <p id="min-price">Min Price: DA</p>
                                          <input type="range" min="50" max="500" name="min_price"  id="min-price-slider">
                                        </div>

                                      </div>
                                    </div>


                                    <div class="card">
                                      <div class="price-content">

                                        <div>
                                          <p id="max-price">Max Price: Da</p>
                                          <input type="range" min="500" max="1000" name="max_price"  id="max-price-slider">
                                        </div>
                                      </div>
                                    </div>
                      </div>

                      <div class="row third">
                        <div class="input-field">
                          <div class="result-count">
                            </div>
                          <div class="group-btn">
                            <button class="btn-delete" id="delete">Reset</button>
                            <button class="btn-search">Search</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light  py-4 px-4 " style="background:#EAA636;"  >


<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right:45px;">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
        <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle second-text fw-bold " style="color:#ffffff;" href="#" id="navbarDropdown"
                role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                <i class="fa fa-filter" style="font-size: 25px;" ></i> <span style="color:#ffffff;     font-size: 25px; ">Filter By</span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >

                <li><a class="dropdown-item" href="{{ route('products', ['sortType' => 'price_low_high']) }}">Price : Low To High</a></li>

                <li><a class="dropdown-item" href="{{ route('products', ['sortType' => 'price_high_low']) }}"  >Price : High To Low</a></li>
                <li><a class="dropdown-item" href="{{ route('products', ['sortType' => 'rating_high_low']) }}">Avg. Customer Review</a></li>


            </ul>
        </li>
    </ul>
</div>
</nav>


    @if(isset($products))
            <div class="containeraa">
            @foreach ($products as $product)

                <div class="details">

                    <div class="content">

                    <img src="{{ asset('img/' . $product->images[0]->URL) }}">
                        <h2>{{ $product->nom_produit }}  <br> </h2>
                          <br>

                  @php
           $totalRating = 0;
         $numberOfEvaluations = count($product->evaluations);
       foreach ($product->evaluations as $evaluation)
       {  $totalRating += $evaluation->Note; }
    $averageRating = $numberOfEvaluations > 0 ? $totalRating / $numberOfEvaluations : 0;
            @endphp



                              @for ($i = 1; $i <= 5; $i++)
                         <span class="fa fa-star{{ $i <= $averageRating ? ' checked' : '' }}"></span>
                        @endfor



                        <p style="visibility:hidden;">
                            {{ $product->description }}
                        </p>
                        <h2>{{ $product->prix_par_piéce }} DA</h3>
                        <a href="{{ route('product_consult', ['produit' => $product->Id_Produit]) }}"><button onclick="window.location='{{ route('product_consult') }}'">See Product</button></a>
                    </div>
                    <span class="clear"></span>
                </div>
                @endforeach
            </div>

            @endif

    <!-- Page Header End -->


    <!-- Product Start





    Product End -->
    @section('script')





    <script src="js/choices.js"></script>
    <script>

const minPriceSlider = document.getElementById('min-price-slider');
const maxPriceSlider = document.getElementById('max-price-slider');
const minPriceDisplay = document.getElementById('min-price');
const maxPriceDisplay = document.getElementById('max-price');

minPriceSlider.addEventListener('input', function() {
  minPriceDisplay.textContent = `Min Price: DA ${minPriceSlider.value}`;
});

maxPriceSlider.addEventListener('input', function() {
  maxPriceDisplay.textContent = `Max Price: DA ${maxPriceSlider.value}`;
});
</script>


<script>




      const customSelects = document.querySelectorAll("select");
      const deleteBtn = document.getElementById('delete')
      const choices = new Choices('select',
      {
        searchEnabled: false,
        removeItemButton: true,
        itemSelectText: '',
      });
      for (let i = 0; i < customSelects.length; i++)
      {
        customSelects[i].addEventListener('addItem', function(event)
        {
          if (event.detail.value)
          {
            let parent = this.parentNode.parentNode
            parent.classList.add('valid')
            parent.classList.remove('invalid')
          }
          else
          {
            let parent = this.parentNode.parentNode
            parent.classList.add('invalid')
            parent.classList.remove('valid')
          }
        }, false);
      }
      deleteBtn.addEventListener("click", function(e)
      {
        e.preventDefault()
        const deleteAll = document.querySelectorAll('.choices__button')
        for (let i = 0; i < deleteAll.length; i++)
        {
          deleteAll[i].click();
        }
      });

    </script>
    @endsection
@endsection
