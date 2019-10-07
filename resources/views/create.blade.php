<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Latihan Crud</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Tambah Buku Baru</h2><br/>
      <form method="post" action="{{url('books')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Title">Judul buku:</label>
            <input type="text" class="form-control" name="title">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Description">Keterangan:</label>
              <input type="text" class="form-control" name="description">
            </div>
        </div>
          
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Qty">Stock:</label>
            <input type="text" class="form-control" name="qty">
          </div>
        </div>
         <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label>Penerbit:</label>
                <select name="publisher">
                  <option value="Pustaka Azickri">Pustaka Azickri</option>
                  <option value="Pustaka Rangga">Pustaka Rangga</option>
                  <option value="Pustaka Ferdy">Pustaka Ferdy</option>  
                  <option value="Pustaka Akhmal">Pustaka Akhmal</option>
                  <option value="Pustaka Diandra">Pustaka Diandra</option>
                  <option value="Pustaka Satria">Pustaka Satria</option>  
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:10px">
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
