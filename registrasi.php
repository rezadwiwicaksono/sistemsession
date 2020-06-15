<?php
//Author Robby Takdirillah 2018
//https://blogbugabagi.blogspot.com/
require 'functions.php';

if ( isset($_POST["register"]) ) {
    if( registrasi($_POST) > 0 ) {
        echo "<script>
            alert ('user baru berhasil ditambahkan');
        </script>";
        header("Location: login.php");
    } else {
        echo mysqli_error ($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro.min.css">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-colors.min.css">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-rtl.min.css">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-icons.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Registrasi</title>
    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
    <style>
        .regist-form {
            width: 900px;
            height: auto;
            top: 30%;
            margin-top: -160px;
        }
    </style>
  </head>
  <body class="h-vh-100 bg-brandColor2">
    <br>
    
    <br><br>
    
    <form action="" method="post" class="regist-form bg-white p-6 mx-auto border bd-default win-shadow">
    <h1 class="fg-brandColor2" align="center">Registrasi</h1>
        <div class="form-group cell-6  offset-3">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukan Username"/>
            <small class="text-muted">Username tidak boleh memakai spasi dan huruf kecil semua</small>
        </div>
        <div class="form-group cell-6  offset-3">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukan Password"/>
            <small class="text-muted">Password minimal 8 karakter dicampur dengan angka atau simbol</small>
        </div>
        <div class="form-group cell-6  offset-3">
            <label for="password2">Konfirmasi Password</label>
            <input type="password" id="password2" name="password2" placeholder="Masukan Kembali Password Anda"/>
            <small class="text-muted">Masukan ulang password untuk konfirmasi</small>
        </div>
        <div class="form-group cell-6  offset-3">
            <button class="button success" type="submit" name="register"><span class="mif-user"></span> Daftar</button>
            <button class="button alert" type="reset" name="reset"><span class="mif-loop2"></span> Reset</button>
            <a class="button dark" href="login.php"><span class="mif-cancel"></span> Batal</a>
        </div>
    </form>

    <!-- jQuery first, then Metro UI JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
  </body>
</html>