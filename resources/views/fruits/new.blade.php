<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<div align="center">
  <h3>
    Add New Fruit Here!
  </h3>
</div>
  <div class="row">
      <div class="col-md-6">
        <form action="store" method="post">
          <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name">
          </div>
          <div class="form-group">
            <label for="price">Price</label>
            <input class="form-control" type="text" name="price" id="price">
          </div>
          <div class="form-group">
            <label for="expiration_date">Use By</label>
            <input class="form-control" type="text" name="expiration_date" id="expiration_date">
          </div>
          <div class="form-group">
            <label for="photo">Photo</label>
            <input class="form-control" type="text" name="photo" id="photo">
          </div>
          <button class="btn btn-primary" type="submit" name="submit">Submit</button>
          <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        </form>
      </div>
    </div>
