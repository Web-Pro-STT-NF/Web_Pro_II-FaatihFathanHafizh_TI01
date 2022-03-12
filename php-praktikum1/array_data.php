.<?php 
$siswa1 = ['id'=>'Hamka','nim'=>'011010021','uts'=>80,'uas'=>84,'tugas'=>78];
$siswa2 = ['id'=>'fadel','nim'=>'011210032','uts'=>70,'uas'=>50,'tugas'=>68];
$siswa3 = ['id'=>'riski','nim'=>'011300023','uts'=>60,'uas'=>86,'tugas'=>70];
$siswa4 = ['id'=>'anca','nim'=>'011340032','uts'=>90,'uas'=>91,'tugas'=>82];

$ar_nilai = [$siswa1, $siswa2 , $siswa3, $siswa4];

 ?>
<h2 align="center">Web Programming 02| STT-NF<h2>

<h2 align="center">Praktikum 01: PHP Dasar</h2>
<h3>Daftar Nilai Siswa :</h3>
<table border="1" width="100%">
<thead>
<tr>
<th>No</th><th>NIM</th><th>UTS</th>
<th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
</tr> 
</thead>
<tbody>
<?php
$nomor = 1; 
foreach($ar_nilai as $ns){
echo '<tr><td>'.$nomor.'</td>';
echo '<td>'.$ns['nim'].'</td>';
echo '<td>'.$ns['uts'].'</td>';
echo '<td>'.$ns['uas'].'</td>';
echo '<td>'.$ns['tugas'].'</td>';
$nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
echo '<tr/>';
$nomor++;
 }
?>
</tbody> 
</table>