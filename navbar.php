<?php
     session_start();
     if($_SESSION['status_login']!=true){
         header('location: login.php');
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Menyisipkan Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Menyisipkan JQuery dan Javascript Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootsrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="/perpustakaan/">Perpustakaan</a>
<div class="container-fluid">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link " href="tambah_kelas.php">Tambah Kelas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="tambah_siswa.php">Tambah Siswa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="tampil_siswa.php">Tampil siswa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="tampil_kelas.php">Tampil kelas</a>
        </li>
        </ul>
    </div>
    </nav>
</body>
</html>
