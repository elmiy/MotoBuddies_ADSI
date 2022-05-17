<?php
    $mysqli = mysqli_connect('localhost', 'root', '', 'adsi') or die("Failed");
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $no_hp = $_POST['no_hp'];

    $cek_akun = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM user WHERE email = '$email'"));
    if($cek_akun != null){
        echo "Email sudah digunakan";
        header("location: register.html");
    }
    else{
        mysqli_query($mysqli, "INSERT INTO user ('email', 'no_hp', 'password') VALUES ('$email','$no_hp','$password')");
        session_start();
        $_SESSION["email"] = $email;
        header('location : register2.html');
    }
?>