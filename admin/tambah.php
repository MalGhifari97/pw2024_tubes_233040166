<?php
session_start();    
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "pw2024_tubes_233040166";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $url = $_POST['url'];
    $id_admin = $_POST['id_admin'];
    $gambar = $_FILES['gambar']['name'];

     // Handle file upload
    if (is_uploaded_file($_FILES['gambar']['tmp_name'])) {
        $target_dir = "../assets/img/";
        $target_file = $target_dir . basename($_FILES['gambar']['name']);
        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
            echo "<script>alert('File " . $_FILES['gambar']['name'] . " upload berhasil.');</script>";
        } else {
            echo "<script>alert('upload gagal');</script>";
        }
    } else {
        echo "Possible file upload attack: filename '". $_FILES['gambar']['tmp_name'] . "'.";
    }

    // Query untuk insert data
    $sql = "INSERT INTO music (judul, deskripsi, url, id_admin, gambar) VALUES ('$judul', '$deskripsi', '$url', '$id_admin', '$gambar')";
    if ($conn->query($sql) === TRUE) {
        echo "Data baru berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

// Tutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Tambah Data</h1> 

<form method="post" enctype="multipart/form-data">
    <ul>
        <li>
            <label for="judul">judul : </label>
            <input type="text" name="judul" id="judul" required>
        </li>
        <li>
            <label for="gambar">gambar : </label>
            <input type="file" name="gambar" id="gambar" required>
        </li>
        <li>
            <label for="deskripsi">deskripsi : </label>
            <input type="text" name="deskripsi" id="deskripsi" required>
        </li>
        <li>
            <label for="id_admin">id_admin : </label>
            <input type="number" name="id_admin" id="id_admin" required>
        </li>
        <li>
            <label for="url">url : </label>
            <input type="text" name="url" id="url" required>
        </li>
        <li>
            <button type="submit" name="submit">Tambah Data</button>
        </li>
    </ul>
</form>

</body>
</html>