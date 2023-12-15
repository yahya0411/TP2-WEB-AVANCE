<div class="row">
    <div class="col-md-6">
        <div class="form-group">
          <label>Name </label>
          <input type="text" name="nameproduct" value="{{old('nameproduct',optional($product ?? null)->nom_produit)}}" class="form-control" placeholder="Enter Name of product">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
          <label>Quantity </label>
          <input type="number" name="quantityproduct" value="{{old('quantityproduct',optional($product ?? null)->quantité_minimale)}}" class="form-control" placeholder="Enter Number of quantity">
         </div>
     </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleSelectBorder">Type </label>
            <select class="form-control" value="{{old('typeproduct',optional($product ?? null)->type_produit)}}" id="select1" name="typeproduct">
                <option value="">Select Type</option>
            </select>
          </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleSelectBorder">Sub type </label>
            <select class="form-control" value="{{old('subtypeproduct',optional($product ?? null)->sous_type)}}" id="select2" name="subtypeproduct">

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
                <input type="file" name="images[]" accept="image/*" multiple class="custom-file-input" id="exampleInputFile">
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
                <input type="text" class="form-control" value="{{old('priceproduct',optional(optional($product ?? null))->prix_par_piéce)}}" name="priceproduct">
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
            <label for="">Description</label>
              <textarea name="descriptionproduct" class="form-control" rows="3" placeholder="Enter description of product" data-lt-tmp-id="lt-685507" spellcheck="false" data-gramm="false">{{old('descriptionproduct',optional($product ?? null)->description)}}</textarea>
            </div>

    </div>



