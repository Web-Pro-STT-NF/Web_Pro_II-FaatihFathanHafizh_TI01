<?php
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
    echo '<br/>Lokasi databasenya ada di '.DBSERVER;
    ?>

    