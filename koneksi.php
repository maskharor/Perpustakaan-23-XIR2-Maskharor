<?php
$conn=mysqli_connect('localhost', 'root','','perpustakaan' );

// check connection
if(mysqli_connect_error()){
    printf("connect failed: %s\n", mysqli_connect_error());
}
?>