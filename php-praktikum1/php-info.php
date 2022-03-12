<?php
    phpinfo();
     // definisikan variable
     $nama = "Faatih fathan Hafizh";
     $umur = "19";
     $berat = "76";
 
     echo 'nama :' . $nama; 
     echo '<br/>umur :' . $umur. 'tahun';
     echo '<br/>berat :' . $berat. 'kg';
 
     echo "<br/>hello $nama Apa kabar";

      //variabel sistem
    echo '<br/>document Root ' .$_SERVER["DOCUMENT_ROOT"];
    echo '<br/>Nama File '.$_SERVER["PHP_SELF"];
    
     //definisikan konstanta
     define('PHI',3.14);
     define('DNAME', 'inventori');
     define('DBSERVER', 'localhost');
 
     $jari = 8 ;
     $luas = PHI * $jari *$jari;
     $kll = 2 * PHI * $jari;
 
     echo 'Luas Lingkaran dengan jari '.$jari.' : '.$luas;
     echo '<br/>kelilingnya : '.$kll;
     ?>
     <hr/>
     <?php
     echo 'Nama databasenya : '.'DBNAME';
     echo '<br/>Lokasi databasenya ada di '.'DBSERVER';
    ?> 