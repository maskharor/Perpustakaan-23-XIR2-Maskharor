<?php include "navbar.php";?>
    <h3>Tambah kelas</h3>
    <form action="proses_tambah_kelas.php" method="post">
        nama kelas : 
        <input type="text" name="nama_kelas" value="" class="form-control">
        
        Kelompok : 
        <input type="text" name="kelompok" value="" class="form-control">

        Angkatan : 
        <input type="text" name="angkatan" value="" class="form-control">
        
        <input type="submit" name="simpan" value="Tambah Kelas" class="btn btn-primary">
    </form>
