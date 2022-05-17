<?php
    $mysqli = mysqli_connect('localhost', 'root', '', 'adsi') or die("Failed");
    session_start();
    
    mysqli_query($mysqli, "UPDATE user SET nama_user = '$_POST[nama]', tanggal_lahir = '$_POST[ttl]', umur = '$_POST[umur]', jenis_kelamin = '$_POST[JK]', alamat = '$_POST[alamat]', tipe_kendaraan = '$_POST[tipe_kendaraan]' WHERE email = '$_SESSION[email]'");
    header('location : verifikasi.html');
?>