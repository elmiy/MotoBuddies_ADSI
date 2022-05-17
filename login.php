<?php
    $mysqli = new mysqli('localhost', 'root', '', 'adsi');
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rs = $mysqli->query("CALL SP_Login ('" . $email . "','" . $password . "')");
    $row = $rs->fetch_object();
    if ($row) {
        header("location: home.php");
    } else {
        echo "Data tidak terdaftar";
        header('Location: login.php');
    }
?>