<div class="container">
  <h1 class="display-4">Add Product</h1>
  <form>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Name Product</label>
      <div class="col-sm-10">
        <input type="name" class="form-control" id="inputEmail3" placeholder="Write Name Product">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Price</label>
      <div class="col-sm-10">
        <input type="price" class="form-control" id="inputPassword3" placeholder="Write Price">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-10">
        <textarea type="textarea" class="form-control" id="inputPassword3" placeholder="Wreite Description"></textarea>
      </div>
    </div>
    <fieldset class="form-group">
      <div class="row">
        <legend class="col-form-label col-sm-2 pt-0">Categories</legend>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
            <label class="form-check-label" for="gridRadios1">
              Tops
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
            <label class="form-check-label" for="gridRadios2">
              Bottoms
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
            <label class="form-check-label" for="gridRadios3">
              Outwear
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
            <label class="form-check-label" for="gridRadios3">
              Accesories
            </label>
          </div>
        </div>
      </div>

    </fieldset>


    <h1 class="display-4">Add Pictures</h1>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="exampleFormControlFile1">Add pictures 1</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
      </div>
      <div class="form-group col-md-6">
        <label for="exampleFormControlFile1">Add pictures 2</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
      </div>
      <div class="form-group col-md-6">
        <label for="exampleFormControlFile1">Add pictures 3</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
      </div>
      <div class="form-group col-md-6">
        <label for="exampleFormControlFile1">Add pictures 4</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Save Product</button>
      </div>
    </div>
</div>