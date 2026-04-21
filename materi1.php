<?php
$nama = "Budi";
$umur = 20;
$tinggi = 175.5;
$hobi = ["Bola","Voli","Renang"];
echo "Haii Nama saya $nama, Umur saya $umur, Tinggi saya $tinggi, dan Hobi saya $hobi[0]";


echo "<br><br>=================================================<br><br>";
//operator dan kondisi (if else)
$nilai1 = 10;
$nilai2 = 20;
$hasil = $nilai1 + $nilai2;
echo "hasil dari = $nilai1 + $nilai2 = $hasil";
echo "<br><br>=================================================<br><br>";
$nilai3 = 25;
$nilai4 = 30;
$nilai5 = 35;
$nilai6 = 40;
$hasil = $nilai3 * $nilai4 / $nilai5 - $nilai6;
echo "hasil dari = $nilai3 * $nilai4 / $nilai5 - $nilai6 = $hasil";
echo "<br><br>=================================================<br><br>";
//pengkondisian
$nilai = 90;
if($nilai >= 90){
    echo "nilai anda A";
    echo "<br><br>Selamat Nilai Anda Sempurna<br><br>";
}else if ($nilai >= 80){
    echo "nilai anda B";
}else if ($nilai >= 70){
    echo "nilsi anda C";
}else if ($nilai >= 60){
    echo "nilai anda D";
}
echo "<br><br>=================================================<br><br>";
$bilangan = 1;
 if($bilangan %2 == 0 ){
    echo "bilangan genap";
 }else{
    echo "bilangan ganjil";
 }

?>