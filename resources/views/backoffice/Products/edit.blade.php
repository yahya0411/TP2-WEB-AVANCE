@extends('app.master')

@section('content')
@section('title','Update product')
<div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Add Product</h3>

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
        <form action="{{route('product.update', ['product' => $product->id])}}" method="POST">
            @csrf
            @method('PUT')
        @include('backoffice.Products.form')
        <div class="col-md-6">

            <div class="form-group">
            <button type="submit" class="btn btn-success btn-block"><i class="fa fa-edit"></i> Update product</button>
            </div>
     </div>
        </form>
    </div>
</div>
@section('menu')
@include('backoffice.Artisans.menu')
@endsection
@endsection
