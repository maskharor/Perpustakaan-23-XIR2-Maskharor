<?php include "navbar.php";?>
    <h3>Tampil Siswa</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA KELAS</th>
                <th>KELOMPOK</th>
                <th>ANGKATAN</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "koneksi.php";
                $qry_kelas=mysqli_query($conn, "select * from kelas");
                // $qry_siswa=mysqli_query($conn, "select * from siswa join kelas on kelas.id_kelas=siswa.id_kelas");
                $no=0;
                while($data_kelas=mysqli_fetch_array($qry_kelas)){
                    $no++;?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$data_kelas['nama_kelas']?></td>
                        <td><?=$data_kelas['kelompok']?></td>
                        <td><?=$data_kelas['angkatan']?></td>
                        <td>
                            <a href="hapus_kelas.php?id_kelas=<?=$data_kelas['id_kelas']?>"onclick="return confirm('Apakah anda yakin menghapus data ini ? ')" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
            ?>
        </tbody>  
    </table>
    <a href="tambah_kelas.php" class="btn btn-success">Tambah</a>