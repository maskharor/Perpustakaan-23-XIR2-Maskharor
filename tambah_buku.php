<?php 
    include "header.php";
?>
    <h3>Tambah Buku</h3>
    <form action="proses_tambah_buku.php" method="post" enctype="multipart/form-data">
        Nama buku : 
        <input type="text" name="nama_buku" value="" class="form-control">
        Deskripsi : 
        <textarea name="deskripsi" cols = 147 class = "form-control"></textarea>
        Foto produk : <br>
        <input type="file" name="foto" class="form-control">
        
        <br>
        <input type="submit" name="simpan" value="Tambah Buku" class="btn btn-primary">
    </form>
<?php 
    include "footer.php";
?>

    
