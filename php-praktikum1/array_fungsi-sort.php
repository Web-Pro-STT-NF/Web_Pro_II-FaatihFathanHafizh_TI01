<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi Sort</title>
</head>
<body>
    <?php
    $ar_mobil = ["h"=>"honda","t"=>"toyota","s"=>"suzuki","b"=>"BMW" ];
    echo '<ol>';
    foreach ($ar_mobil as $k =>$v) {
        echo '<li>'.$k.' - ' . $v . '</li>'; 
    }
     echo '</ol>';
     sort($ar_mobil);
     echo '</hr>';
     echo '<ol>';
     foreach($ar_mobil as $k =>$v){
        echo '<li>'.$k. '-'. $v. '</li>';
    }
     echo '</ol>';
      ?>

</body>
</html>