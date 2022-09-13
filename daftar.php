<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Menyisipkan Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Menyisipkan JQuery dan Javascript Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootsrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="login.php">Perpustakaan</a>
    </nav>
    <h3>Tambah Siswa</h3>
    <form action="proses_daftar.php" method="post">
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
</body>
</html>

    

    