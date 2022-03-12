<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai GET</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<form>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="matkul1">Pemrograman web</option>
        <option value="matkul2">Dasar-Dasar Pemrograman</option>
        <option value="matkul3">Jaringan Komputer</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_praktikum" class="col-4 col-form-label">Nilai Praktikum</label> 
    <div class="col-8">
      <input id="nilai_praktikum" name="nilai_praktikum" placeholder="Nilai Praktikum" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<php? 
<?php 

$proses = isset($_GET['proses']) ? $_GET['proses'] : '0'; 
$nama = isset($_GET['nama']) ? $_GET['nama'] : '';
$matkul = isset($_GET['matkul']) ? $_GET['matkul'] : '0';
$nilai_uts = isset($_GET['nilai_uts']) ? $_GET['nilai_uts'] : '0';
$nilai_uas = isset($_GET['nilai_uas']) ? $_GET['nilai_uas'] : '0';
$nilai_praktikum = isset($_GET['nilai_praktikum']) ? $_GET['nilai_praktikum'] : '0';

echo "Nama : $nama";
echo "<br/>Mata kuliah : $matkul";
echo "<br/>Nilai UTS : $nilai_uts";
echo "<br/>Nilai UAS : $nilai_uas";
echo "<br/>Nilai Tugas : $nilai_praktikum";


?>
</div>
</div>
<div class="row">
<div class="col-12 bg-light pt-3">
<p>Develop By Faatih Fathan Hafizh</p>
</div>
</div>
</div>


</body>
</html>