<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "pw2024_tubes_233040166");
// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM music WHERE id=$id";
    $result = mysqli_query($koneksi, $query);
    if($result) {
        header("Location: admin.php");
        exit();
    }else{
        echo"Gagal menghapus konten.";
    } 
   }   else {
    echo "ID music tidak di temukan";
}