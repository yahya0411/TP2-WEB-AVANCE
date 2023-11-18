@extends('app.master')

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">List of Product</h3>
      <a class="text-primary float-right" href="{{route('product.create')}}"><i class="fas fa-plus"></i> Add product</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Product Name</th>
          <th>Product Description</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Type</th>
          <th>Options</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
        <tr>
          <td>{{$product->nom_produit}}</td>
          <td>{{$product->description}}</td>
          <td>{{$product->prix_par_piéce}}</td>
          <td>{{$product->quantité_minimale}}</td>
          <td>{{$product->type_produit}} / {{$product->sous_type}}</td>
          <td class="">
            <a class="text-info" href=""><i class="fas fa-eye fa-sm"></i></a>
            <a class="text-success" href="product/{{$product->id}}/edit"><i class="fas fa-edit fa-sm"></i></a>
            <form style="display: inline" action="{{route('product.destroy',['product' => $product->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <a class="text-danger" onclick="this.closest('form').submit();return false"><i class="fas fa-trash fa-sm"></i></a>
             </form>
          </td>
        </tr>
        @endforeach

        </tbody>
        <tfoot>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@section('script')
<script>
$(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection
@section('menu')
@include('backoffice.Artisans.menu')
@endsection
@endsection
