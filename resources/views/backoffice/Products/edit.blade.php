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
        <form action="{{route('productt.update', ['product' => $product->Id_Produit])}}" method="POST">
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
@section('script')
<script>
    let opt = ['sucre','salle'];
    let sucre = ['patisserie','viennoiserie'];
    let salle = ['mini-pizza','bourak','petit four'];

    let selt1 = document.getElementById('select1');
    let selt2 = document.getElementById('select2');

opt.forEach(function addItem(Item){
   let option = document.createElement("option");
   option.text = Item;
   option.value = Item;
   selt1.appendChild(option);
});

function addtoSelt2(arr) {
    arr.forEach(function (Item){
    let option = document.createElement("option");
         option.text = Item;
   option.value = Item;
   selt2.appendChild(option);

    });
   }

selt1.onchange = function(){
   selt2.innerHTML = "<option></option>";
   if(this.value == "sucre")
    {
        addtoSelt2(sucre)
    }
    if(this.value == "salle")
    {
        addtoSelt2(salle);
    }
}
</script>
@endsection
@section('menu')
@include('backoffice.Artisans.menu')
@endsection
@endsection
