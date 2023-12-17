<?php
$servername = "localhost";
$database = "book_store";
$username = "root";
$password = "";
 
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database) or die (mysqli_error());
// // mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

//mysqli_close($conn);
?>