<?php
//Author Robby Takdirillah 2018
//https://blogbugabagi.blogspot.com/
session_start();

if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
require 'functions.php';
$id = $_GET["id"];

if ( hapus($id) > 0 ){
    echo "
    <script>
        alert('data berhasil Hapus');
        document.location.href = 'index.php';
    </script>";
} else {
    echo "
    <script>
        alert('data gagal dihapus');
        document.location.href = 'index.php';
    </script>";
}
?>