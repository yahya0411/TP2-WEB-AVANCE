<div class="row">
    <div class="col-md-6">
        <div class="form-group">
          <label>Name </label>
          <input type="text" name="nom_produit" value="{{old('nom_produit',optional($product ?? null)->nom_produit)}}" class="form-control" placeholder="Enter Name of product">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
          <label>Quantity </label>
          <input type="number" name="quantité_minimale" value="{{old('quantité_minimale',optional($product ?? null)->quantité_minimale)}}" class="form-control" placeholder="Enter Number of quantity">
         </div>
     </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleSelectBorder">Type </label>
            <select class="form-control" value="{{old('Type_produit',optional($product ?? null)->type_produit)}}" id="select1" name="Type_produit">
                <option value="">Select Type</option>
            </select>
          </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleSelectBorder">Sub type </label>
            <select class="form-control" value="{{old('sous_type',optional($product ?? null)->sous_type)}}" id="select2" name="sous_type">

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
                <input type="file" name="images[]" accept="image/*" multiple class="custom-file-input" id="exampleInputFile" max="5">
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
                <input type="text" class="form-control" value="{{old('prix_par_piéce',optional(optional($product ?? null))->prix_par_piéce)}}" name="prix_par_piéce">
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
              <textarea name="description" class="form-control" rows="3" placeholder="Enter description of product" data-lt-tmp-id="lt-685507" spellcheck="false" data-gramm="false">{{old('description',optional($product ?? null)->description)}}</textarea>
            </div>

    </div>



