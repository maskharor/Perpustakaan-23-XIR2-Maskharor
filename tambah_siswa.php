<?php include "navbar.php";?>

    <h3>Tambah Siswa</h3>
    <form action="proses_tambah_siswa.php" method="post">
        Nama Siswa : 
        <input type="text" name="nama_siswa" value="" class="form-control">
        
        Tanggal Lahir : 
        <input type="date" name="tanggal_lahir" value="" class="form-control">

        Gender : 
        <select name="gender" class="form-control">
            <option></option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select>
        
        Alamat : 
        <textarea name="alamat"  class="form-control" rows="4"></textarea>

        Kelas : 
        <select name="id_kelas" class="form-control">
            <option></option>
            <?php
                include "koneksi.php";
                $qry_kelas=mysqli_query($conn, "select * from kelas");
                while($data_kelas=mysqli_fetch_array($qry_kelas)){
                    echo '<option value="'.$data_kelas['id_kelas'].'">
                        '.$data_kelas['nama_kelas'].'
                    </option>';
                }
            ?>
        </select>

        Username :
        <input type="text" name="username" value="" class="form-control">
        
        Password : 
        <input type="password" name="password" value="" class="form-control">

        <input type="submit" name="simpan" value="tambah" class="btn btn-primary">
    </form>

    