
<!-- create.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Edit</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit Data Buku</h2><br/>
      <form method="post" action="{{action('BookController@update', $id)}}">
      @csrf
      <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Title">Judul buku:</label>
            <input type="text" class="form-control" name="title" value="{{$book->title}}">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Description">Keterangan:</label>
              <input type="text" class="form-control" name="description" value="{{$book->description}}">
            </div>
        </div>
          
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Qty">Stock:</label>
            <input type="text" class="form-control" name="qty" value="{{$book->qty}}">
          </div>
        </div>
         <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label>Penerbit:</label>
                <select name="publisher">
                  <option value="Pustaka Azickri" @if($book->publisher=="Pustaka Azickri") selected @endif>Pustaka Azickri</option>
                  <option value="Pustaka Rangga" @if($book->publisher=="Pustaka Rangga") selected @endif>Pustaka Rangga</option>
                  <option value="Pustaka Ferdy" @if($book->publisher=="Pustaka Ferdy") selected @endif>Pustaka Ferdy</option>
                  <option value="Pustaka Akhmal" @if($book->publisher=="Pustaka Akhmal") selected @endif>Pustaka Akhmal</option>  
                  <option value="Pustaka Diandra" @if($book->publisher=="Pustaka Diandra") selected @endif>Pustaka Diandra</option>
                  <option value="Pustaka Satria" @if($book->publisher=="Pustaka Satria") selected @endif>Pustaka Satria</option>   
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:10px">
            <button type="submit" class="btn btn-success">Edit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>