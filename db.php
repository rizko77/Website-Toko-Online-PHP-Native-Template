<?php
$conn = mysqli_connect(
    "localhost", 
    "root", 
    "", 
    "koko_store"
);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
