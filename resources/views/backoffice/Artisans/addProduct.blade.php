@extends('app.master')

@section('content')

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

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label>Name </label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name of product">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label>Quantity </label>
                  <input type="number" class="form-control" placeholder="Enter Number of quantity">
                 </div>
             </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleSelectBorder">Type </label>
                    <select class="form-control" id="exampleSelectBorder">
                      <option>Sucré</option>
                      <option>Salé</option>
                    </select>
                  </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleSelectBorder">Sub type </label>
                    <select class="form-control" id="exampleSelectBorder">
                      <option>Sucré</option>
                      <option>Salé</option>
                    </select>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputFile">Images </label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleSelectBorder">Price </label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text">DZD</span>
                        </div>
                        <input type="text" class="form-control">
                        <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                        </div>
                        </div>
                  </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                      <textarea class="form-control" rows="3" placeholder="Enter description of product" data-lt-tmp-id="lt-685507" spellcheck="false" data-gramm="false"></textarea>
                    </div>

            </div>
                <div class="col-md-6">
                    <label> </label>

                    <div class="form-group">
                    <button type="button" class="btn btn-primary btn-block"><i class="fa fa-plus"></i> Add product</button>
                    </div>
             </div>


        </div>
    </div>
</div>

@section('title','Artisans')

@section('menu')
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-book"></i>
        <p>
            Products
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
            Commands
        </p>
    </a>
</li>

@endsection
@endsection
