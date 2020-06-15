<?
//Author Robby Takdirillah 2018
//https://blogbugabagi.blogspot.com/
session_start();

if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Tentang</title>
    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
  </head>
  <body class="h-vh-100 bg-brandColor2">
  <?php include 'nav.php'; ?>
    <div class="container">
        <!-- content here -->
        <br><br><br>
        <h2 style="color: white;"  align="center">Tentang</h2>
        <hr>
    </div>
    <div class="cell-4 offset-4">
        <div data-role="panel"
        data-title-caption="Programmer"
        data-collapsed="true"
        data-collapsible="true">
        <p align="center">
        <span class="mif-embed2 fg-blue"></span>
        Robby Takdirillah
        </p>
    </div>
    </div>
    <div class="cell-4 offset-4">
            <div data-role="panel"
            data-title-caption="Sosial Media"
            data-collapsed="true"
            data-collapsible="true">
            <p align="center">
                <a href="https://www.facebook.com/robbytakdirillah" target="_blank"><span class="mif-facebook2 mif-5x fg-blue"></span></a>
                <a href="https://www.instagram.com/takdirillah/" target="_blank"><span class="mif-instagram mif-5x fg-brown"></span></a>
                <a href="http://blogbugabagi.blogspot.com/" target="_blank"><span class="mif-blogger mif-5x fg-orange"></span></a>
                <a href="https://www.youtube.com/channel/UC-rT2SSbSovPH0qUzQYNV1A" target="_blank"><span class="mif-youtube mif-5x fg-red"></span></a>
                </p>
            </div>
    </div>
    <div class="cell-4 offset-4">
        <div data-role="panel"
        data-title-caption="Fitur"
        data-collapsed="true"
        data-collapsible="true">
        <p align="center">
        <span class="mif-enter fg-blue"></span>
        Login
        </p>
        <p align="center">
        <span class="mif-user-plus fg-blue"></span>
        Pendaftaran
        </p>
        <p align="center">
        <span class="mif-file-upload fg-blue"></span>
        Upload Gambar
        </p>
        <p align="center">
        <span class="mif-database fg-blue"></span>
        CRUD
        </p>
        <p align="center">
        <span class="mif-search fg-blue"></span>
        Pencarian Data
        </p>
    </div>
    <!-- jQuery first, then Metro UI JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
  </body>
</html>