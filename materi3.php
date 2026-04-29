<?php
echo "<h2 style='color:blue;'>Materi 3: Function PHP - Kalkulator</h2>";
echo "<hr>";

// Form Login
echo "<h3>Form Login</h3>";
echo "<form method='post'>";
echo "Username: <input type='text' name='username' required><br><br>";
echo "Password: <input type='password' name='password' required><br><br>";
echo "<input type='submit' value='Login'>";
echo "</form>";
echo "<hr>";

// function login
function login($username, $password) {
    // Contoh sederhana: cek jika username 'admin' dan password '123'
    if ($username == 'admin' && $password == '123') {
        return "Login berhasil! Selamat datang, $username.";
    } else {
        return "Login gagal! Username atau password salah.";
    }
}

// function sapa
function sapa($nama) {
    return "Halo, selamat datang $nama <br>";
}

// function kalkulator
function hitung($a, $b, $operator) {
    switch ($operator) {
        case "+":
            return $a + $b;
        case "-":
            return $a - $b;
        case "*":
            return $a * $b;
        case "/":
            if ($b == 0) {
                return "Tidak bisa dibagi 0";
            }
            return $a / $b;
        default:
            return "Operator tidak valid";
    }
}
?>

<!-- FORM INPUT -->
<h3>Form Input</h3>
<form method="post">
    Nama: <input type="text" name="nama">
    <br><br>

    Angka 1: <input type="number" name="angka1">
    <br><br>

    Angka 2: <input type="number" name="angka2">
    <br><br>

    Operator:
    <select name="operator">
        <option value="+">Penjumlahan (+)</option>
        <option value="-">Pengurangan (-)</option>
        <option value="*">Perkalian (*)</option>
        <option value="/">Pembagian (/)</option>
    </select>
    <br><br>

    <button type="submit" name="kirim">Kirim</button>
</form>

<?php
// CEK JIKA TOMBOL DIKLIK
if (isset($_POST['kirim'])) {

    $nama = $_POST['nama'];
    $a = $_POST['angka1'];
    $b = $_POST['angka2'];
    $operator = $_POST['operator'];

    echo "<hr>";
    echo "<h3 style='color:green;'>Hasil:</h3>";

    if (!empty($nama)) {
        echo sapa($nama);
    }

    if ($a !== "" && $b !== "") {
        echo "Hasil: $a $operator $b = " . hitung($a, $b, $operator) . "<br>";
    }
}

// CEK JIKA FORM LOGIN DIKIRIM
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "<hr>";
    echo "<h3 style='color:red;'>Hasil Login:</h3>";
    echo login($username, $password);
}
?>