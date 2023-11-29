@extends('app.master')

@section('content')
@section('title','Add product')
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
        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
        @include('backoffice.Products.form')
        <div class="col-md-6">
            <label> </label>

            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-plus"></i> Add product</button>
            </div>
     </div>
    </div>
        </form>
    </div>
</div>
@if (session('status'))
@section('script')
<script>
toastr.success('hello');
</script>
@endsection
@endif

@section('title','Add product')

@section('menu')
@include('backoffice.Artisans.menu')
@endsection
@endsection
