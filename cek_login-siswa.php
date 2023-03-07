<?php
session_start();
include 'koneksi.php';
$username = $_POST['nama'];
$password = $_POST['password'];
$login = mysqli_query($koneksi, "select * from siswa where nama='$username' and nisn='$password'");

$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);
        $_SESSION['nama'] = $username;
        $_SESSION['nisn'] = $password;
        $_SESSION['level'] = "Siswa";
        header("location:Siswa/dashboard_siswa.php");
    } else {
        header("location:form-login-siswa.php?pesan=gagal");
    }
?>