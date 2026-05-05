<form action="" method="post">
    username : <input type="text" name="username"> <br><br>
    password : <input type="password" name="password"> <br><br>
    nama     : <input type="text" name="nama"> <br><br>
    email    : <input type="text" name="email"> <br><br>
    <input type="submit" value="Kirim Data" name="kirim"><br><br>
</form>
<?php
include "koneksi.php";
if (isset ($_POST['kirim'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $query = "INSERT INTO user (username, password, nama, email) VALUES ('$username', '$password', '$nama', '$email')";
    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Data gagal disimpan";
    }
}