<?php
//Author Robby Takdirillah 2018
//https://blogbugabagi.blogspot.com/
session_start();

if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

//pagination
//config pagination
$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awalData = ( $jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

//cari
if (isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro.min.css">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-colors.min.css">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-rtl.min.css">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-icons.min.css">
    <style>
    .tabel th, td{
        color: white;
    }
    @media print {
        .button {
            display:none;
        }
    }
    </style>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<body class="h-vh-100 bg-brandColor2">
    <?php include 'nav.php'; ?>
    <br><br><br>
    <h1 align="center" style="color: white;">Daftar Mahasiswa</h1>
    <a class="button primary cell-4  offset-4 drop-shadow" href="tambah.php"><span class="mif-plus"></span> Tambah Data Mahasiswa</a>
    <br><br>
    
    <form action="" method="post">
    <div class="form-group cell-6  offset-3">
        <input type="text"  name="keyword" placeholder="Cari dengan nama atau nrp atau jurusan" autofocus autocomplete="off">
        <button class="button" name="cari"><span class="mif-search"> Cari</button>
    </div>
    </form>

    <table class="table row-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
    </thead>
    <tbody>

        <?php $i = 1; ?>
        <?php foreach ( $mahasiswa as $row) : ?>
        <tr class="row-hover">
            <td><?php echo $i; ?></td>
            <td>
                <a class="button success drop-shadow" href="ubah.php?id=<?php echo $row["id"]; ?>"><span class="mif-pencil mif-2x"></span> Edit</a>
                <a class="button alert drop-shadow" href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Yakin');"><span class="mif-bin mif-2x"></span>Hapus</a>
            </td>
            <td><img class="drop-shadow" src="img/<?php echo $row["gambar"]; ?>" alt="" width="50"></td>
            <td> <?php echo $row["nrp"]; ?></td>
            <td><?php echo $row["nama"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </tbody>
    </table>
    <!-- PaGINATIOn -->
    <div class="cell-4  offset-4 ">
    <ul class="pagination alert">
        <?php if ( $halamanAktif > 1 ) : ?>
            <li class="page-item"><a class="page-link" href="?halaman=<?php echo $halamanAktif - 1 ?>"><span class="mif-arrow-left"></span> Prev</a></li>
        <?php endif; ?>
        <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
            <?php if( $i == $halamanAktif ) : ?>
                <li class="page-item active"><a class="page-link" href="?halaman=<?php echo $i; ?>" style="font-weight: bold; color: white;"><?php echo $i; ?></a></li>
            <?php else : ?>
            <li class="page-item"><a class="page-link" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endif; ?>
        <?php endfor; ?>
        <?php if ( $halamanAktif < $jumlahHalaman ) : ?>
            <li class="page-item"><a class="page-link" href="?halaman=<?php echo $halamanAktif + 1 ?>">Next <span class="mif-arrow-right"></span></a></li>
        <?php endif; ?>
    </ul>
    </div>
    
    <!-- SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
</body>
</html>