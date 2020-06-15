<?php
//Author Robby Takdirillah 2018
//https://blogbugabagi.blogspot.com/
session_start();

if ( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}
require 'functions.php';

if ( isset($_POST['login']) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'" );

    //cek usernaame
    if ( mysqli_num_rows($result) === 1 )  {
        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"]) ) {
            //sets session
            $_SESSION["login"] = true;
            }
            header("location: index.php");
            exit;
        }

    $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Login</title>
    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
    <style>
        .notif-form {
            width: 300px;
            margin-top: -20px;
            top: 10%;
        }
        .login-form {
            width: 350px;
            height: auto;
            top: 50%;
            margin-top: -160px;
        }
    </style>
  </head>
  <body class="h-vh-100 bg-brandColor2">
  <?php if( isset($error) ) : ?>
  <form action="" method="post" class="notif-form bg-red p-6 mx-auto border bd-default win-shadow">
  <span class="mif-notification fg-white mif-4x place-right" style="margin-top: -10px;"></span>
  <h5 class="text-light">Username / Password Salah ! </h5>
  </form>
    <?php endif; ?>
    <form action="" method="post" class="login-form bg-white p-6 mx-auto border bd-default win-shadow">
        <h2 class="fg-brandColor2 text-light">Login </h2>
        <hr class="thin mt-4 mb-4 bg-red">
        <div class="form-group">
            <input type="text" name="username" data-role="input" data-prepend="<span class='mif-user'>" placeholder="Masukan username">
        </div>
        <div class="form-group">
            <input type="password" name="password" data-role="input" data-prepend="<span class='mif-key'>" placeholder="Masukan password...">
        </div>
        <div class="form-group mt-10">
            <input type="checkbox" name="remember" data-role="checkbox" data-caption="Ingat Saya" class="place-right">
            <button class="button success" type="submit" name="login" class="button"><span class="mif-enter"> Masuk</button>
            <a class="button primary" href="registrasi.php"><span class="mif-user-plus"></span> Daftar</a>
        </div>
</form>

    <!-- jQuery first, then Metro UI JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
  </body>
</html>