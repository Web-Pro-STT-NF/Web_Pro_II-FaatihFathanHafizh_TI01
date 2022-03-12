<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
   <div class="container">
     <div class="row">
       <div class="col-12">
         <h3 align="center">Form belanja</h3>

       </div>
     </div>

   </div>
   <div class="row d-flex">
            <div class="col-8">
            <form class="mb-4" method="post">
    <form>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="text1" name="text1" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_0" type="checkbox" class="custom-control-input" value="tv"> 
        <label for="checkbox_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_1" type="checkbox" class="custom-control-input" value="kulkas"> 
        <label for="checkbox_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_2" type="checkbox" class="custom-control-input" value="mesin cuci"> 
        <label for="checkbox_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <select id="jumlah" name="jumlah" class="custom-select">
        <option value="satu">1</option>
        <option value="dua">2</option>
        <option value="tiga">3</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="Kirim" class="btn btn-primary">Kirim</button>
    </div>
  </div>
  <div class="col-4">
    <div class="card" style="width: 15rem">
    <div class="card-top bg-primary">
      List Harga Produk
      <ul class="list-group">
        <li class="list-group item">Tv : 3.500.000</li>
        <li class="list-group item">kulkas : 4.200.000</li>
        <li class="list-group item">Mesin Cuci : 7.350.000</li>
      </ul>
      <div class="card-bottom bg-primary">
        Note: Harga dapat berubah kapan saja.
      </div>
    </div>
  </div>
  </div>
</form>
<div class="php">
  <br>
  
  <?php $mengirim = isset($_POST['proses']) ? $_POST['proses'] : '';
        $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
        $produk = isset($_POST['produk']) ? $_POST['produk'] : '';
        $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';
        ?>
        </div>
   </body>
</html>