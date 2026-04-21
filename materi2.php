<form method="post">
    Masukan Angka : <input type ="number" name ="angka"><br>
    <input type ="submit" value ="kirim">

</form>

<?php
if (isset ($_POST['angka'])){
    $data =$_POST['angka'];
    for($i=1; $i <= $data; $i++){
        echo "angka $i <br>";
    }

 if($data %2 == 0 ){
    echo "angka $data = bilangan genap";
 }else{
    echo "angka $data = bilangan ganjil";
 }

}
?>