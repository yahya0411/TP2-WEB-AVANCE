@extends('app.master')
@section('content')
@section('custum_style')

<link rel="stylesheet" href="{{asset('custumStyle/product.css')}}">


@endsection
<div class="wrapper row">
    <div class="preview col-md-6">
        <div class="preview-pic tab-content">

          <div class="tab-pane active" id="pic-1"><img src="http://placekitten.com/></div>
          <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
          <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
          <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
          <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
        </div>
        <ul class="preview-thumbnail nav nav-tabs">
          <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
          <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
          <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
          <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
          <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
        </ul>

    </div>
    <div class="details col-md-6">
        <h3 class="product-title">produit
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
        <p class="product-description">Crèmes pâtissières, mousselines, crème au beurre, chiboust, chantilly, bavarois, mousses sont les principales garnitures utilisées en pâtisserie.</p>
        <h4 class="price"> price: <span>DZ 250</span></h4>
        

    </div>
</div>
@section('menu')
@include('backoffice.Artisans.menu')
@endsection
@endsection
