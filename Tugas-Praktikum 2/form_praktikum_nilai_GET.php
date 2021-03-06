<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai GET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container card">
        <div class="row">
            <div class="col-12 bg-light pt-3">
                <p>Sistem Penilaian</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Form Nilai Siswa</p>
                <hr>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
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
                            <input id="matkul" name="matkul" placeholder="Mata Kuliah" type="text" class="form-control">
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
                        <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label>
                        <div class="col-8">
                            <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="proses" type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </form>
                <?php 

                    $proses = isset($_GET['proses']) ? $_GET['proses'] : '0'; 
                    $nama = isset($_GET['nama']) ? $_GET['nama'] : '';
                    $matkul = isset($_GET['matkul']) ? $_GET['matkul'] : '0';
                    $nilai_uts = isset($_GET['nilai_uts']) ? $_GET['nilai_uts'] : '0';
                    $nilai_uas = isset($_GET['nilai_uas']) ? $_GET['nilai_uas'] : '0';
                    $nilai_tugas = isset($_GET['nilai_tugas']) ? $_GET['nilai_tugas'] : '0';

                    echo "Nama : $nama";
                    echo "<br/>Mata kuliah : $matkul";
                    echo "<br/>Nilai UTS : $nilai_uts";
                    echo "<br/>Nilai UAS : $nilai_uas";
                    echo "<br/>Nilai Tugas : $nilai_tugas";
        

                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 bg-light pt-3">
                <p>Develop By Mahasiswa STT NF</p>
            </div>
        </div>
    </div>
</body>

</html>