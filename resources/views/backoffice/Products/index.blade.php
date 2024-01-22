@extends('app.master')

@section('content')
@section('custum_style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css">
@endsection
<div class="card">
    <div class="card-header">
      <h3 class="card-title">List of Product</h3>
      <a class="text-primary float-right" href="{{route('productt.create')}}"><i class="fas fa-plus"></i> Add product</a>
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
            <a class="text-info" href="productt/{{$product->Id_Produit}}"><i class="fas fa-eye fa-sm"></i></a>
            <a class="text-success" href="productt/{{$product->Id_Produit}}/edit"><i class="fas fa-edit fa-sm"></i></a>
            <form style="display: inline" action="{{route('productt.destroy',['productt' => $product->Id_Produit])}}" method="POST">
                @csrf
                @method('DELETE')
                <a class="text-danger" style="cursor: pointer" onclick="confirm(this.closest('form'));return false"><i class="fas fa-trash fa-sm"></i></a>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
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

  function confirm(obj)
  {
    const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: "btn btn-success",
    cancelButton: "btn btn-danger"
  },
  buttonsStyling: false
});
swalWithBootstrapButtons.fire({
  title: "Are you sure?",
  text: "You won't be able to revert this!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel!",
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    swalWithBootstrapButtons.fire({
      title: "Deleted!",
      text: "Your product has been deleted.",
      icon: "success"
    });
    obj.submit();
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire({
      title: "Cancelled",
      text: "Your imaginary file is safe :)",
      icon: "error"
    });
  }
});
  }
</script>
@endsection
@section('menu')
@include('backoffice.Artisans.menu')
@endsection
@endsection
