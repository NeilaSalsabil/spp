<?php
$koneksi = mysqli_connect("localhost","root","","spp_nei");
if(mysqli_connect_errno()){
    echo"koneksi database gagal : ".mysqli_connect_error();
}
?>