<?php include "navbar.php";?>

<?php
    include "koneksi.php";
    $qry_get_siswa=mysqli_query($conn, "select * from siswa where id_siswa = '".$_GET['id_siswa']."' ");
    $data_siswa=mysqli_fetch_array($qry_get_siswa);
?>
<h3>Tambah siswa</h3>
<form action="proses_ubah_siswa.php" method="post">
    <input type="hidden" name="id_siswa" value="<?=$data_siswa['id_siswa']?>">
    Nama siswa : 
    <input type="text" name="nama_siswa" value="<?=$data_siswa['nama_siswa']?>" class="form-control">
    Tanggal lahir :
    <input type="date" name="tanggal_lahir" value="<?=$data_siswa['tanggal_lahir']?>" class="form-control">
    Gender :
     <?php 

        $arr_gender=array('L'=>'Laki-laki','P'=>'Perempuan');

        ?>

        <select name="gender" class="form-control">

            <option></option>

            <?php foreach ($arr_gender as $key_gender => $val_gender):

                if($key_gender==$data_siswa['gender']){

                    $selek="selected";

                } else {

                    $selek="";

                }

             ?>

<option value="<?=$key_gender?>" <?=$selek?>><?=$val_gender?></option>

            <?php endforeach ?>

        </select>
    Alamat :
    <textarea name="alamat" class="form-control" rows="4">
        <?=$data_siswa['alamat']?>
    </textarea>
    Kelas :
    <select name="id_kelas" class="form-control">
        <option></option>
        <?php
            include "koneksi.php";
            $qry_kelas=mysqli_query($conn, "select * from kelas");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
                if($data_kelas['id_kelas']==$data_siswa['id_kelas']){
                    $selek="selected";
                }
                else{
                    $selek="";
                }

                echo'
                <option value="'.$data_kelas['id_kelas'].'" '.$selek.'> 
                '.$data_kelas['nama_kelas'].'
                </option>
                ';
            }
        ?>
    </select>
    Username : 
    <input type="text" name="username" value="<?=$data_siswa['username']?>" class="form-control">
     
    Password : 
    <input type="password" name="password" value="" class="form-control">
    <input type="submit" name="simpan" value="Ubah Siswa" class="btn btn-primary">
</form>