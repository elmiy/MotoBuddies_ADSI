<?php
    $dbConnection  = mysqli_connect('localhost', 'root', '', 'adsi') or die("Failed");
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $no_hp = $_POST['no_hp'];

    $sql = "SELECT email FROM user WHERE email = '$email'";
    $cek_email = mysqli_query($dbConnection , $sql);
    $cek = mysqli_fetch_array($cek_email, MYSQLI_NUM);
    if($cek > 0){
        echo "Email sudah digunakan";
        header("location:register.html");
    }
    else{
        $sqlquery = "INSERT INTO user (email, no_hp, password) VALUES ('$email','$no_hp','$password')";
        mysqli_query($dbConnection , $sqlquery);
        session_start();
        $_SESSION["email"] = $email;
        header("location:register2.html");
    }
?>
