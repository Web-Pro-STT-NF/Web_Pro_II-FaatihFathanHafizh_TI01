<?php
$_fruits = ["apple","orange","manggo"];

echo "Element buah indeks ke-2 ". $_fruits[2];
echo '<br/>Jumlah Buah :' .count($_fruits);

?>
<h3>Daftar Buah</h3>
<ol>
    <?php
         $jumlah = count($_fruits);
         for($i = 0 ; $i < $jumlah ; $i++){
            echo '<li>'.$_fruits[$i].'</li>';
    }
    ?>
</ol>