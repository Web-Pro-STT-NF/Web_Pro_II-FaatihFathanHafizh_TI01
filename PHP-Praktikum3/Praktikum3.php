<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">]
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
    <div class="container">
    <div class="row">
            <div class="col-12 bg-light pt-3">
                <p>Sistem Penilaian</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Form Nilai siswa</p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="POST">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                        <div class="col-5">
                            <input id="nama" name="nama" placeholder="masukan nama lengkap" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                        <div class="col-5">
                            <select id="matkul" name="matkul" class="custom-select">
                                <option value="Dasar - Dasar Pemrograman">Dasar - Dasar Pemrograman</option>
                                <option value="Pemrograman Web">Pemrograman Web</option>
                                <option value="Basis Data">Basis Data</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                        <div class="col-3">
                            <input id="nilai_uts" name="nilai_uts" placeholder="masukan nilai uts" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                        <div class="col-3">
                            <input id="nilai_uas" name="nilai_uas" placeholder="masukan nilai uas" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label>
                        <div class="col-3">
                            <input id="nilai_tugas" name="nilai_tugas" placeholder="masukan nilai tugas" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="proses" type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </form>
                <?php
              include_once 'atas.php';
                ?>
                <h1>Selamat Datang</h1>
                <?php 
                include_once 'libfungsi.php';
                $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
                $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
                $mata_kuliah = isset($_POST['mata_kuliah']) ? $_POST['mata_kuliah'] : ''; 
                $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
                $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
                $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : ''; 
                
                echo "nama : $nama";
                echo "<br/>Mata kuliah : $mata_kuliah";
                echo "<br/>Nilai UTS : $nilai_uts";
                echo "<br/>Nilai UAS : $nilai_uas";
                echo "<br/>Nilai Tugas : $nilai_tugas"; 
                
                $nilai_akhir = "persentase"($nilai_uts, $nilai_uas, $nilai_tugas);
                $grade_nilai = "grade_nilai"($nilai_akhir);

                echo "<br/>nilai akhir : $nilai_akhir";
                echo "<br/>status : kelulusan($nilai_akhir)";
                echo "<br/>Grade nilai : $grade_nilai";
                echo "<br/>Predikat Nilai : predikat_nilai($grade_nilai)";
                ?>
                

<?php
include_once 'bawah.php';

// method persentase nilai akhir
function persentase($_uts, $_uas, $_tugas){
    $result = (30 * (int)$_uts / 100) + (30 * (int)$_uas / 100) + (30 * (int)$_tugas / 100);
    return $result;
}

// method kelulusan
function kelulusan($_nilai){
    if($_nilai > 55){
        return "LULUS";
    } else {
        return "TIDAK LULUS";
    }
}

// method grade nilai
function grade_nilai($_nilai){
    if($_nilai > 85){
        return "A";
    } else if ($_nilai > 70){
        return "B";
    } else if ($_nilai > 56){
        return "C";
    } else if ($_nilai > 36){
        return "D";
    } else if($_nilai > 0){
        return "E";
    } else {
        return "I";
    }
}

// method predikat nilai
function predikat_nilai($_grade){
    switch($_grade){
        case "A":
            return "Sangat Memuaskan";
            break;
        case "B" :
            return "Memuaskan";
            break;
        case "C":
            return "Cukup";
            break;
        case "D":
            return "Kurang";
            break;
        case "E":
            return "Sangat Kurang";
            break;
        default:
            return "Predikat tidak terdefinisi";
    }
}
?>
    </div>
    
           
</body>
</html>