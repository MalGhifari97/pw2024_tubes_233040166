<?php
session_start();
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "pw2024_tubes_233040166");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mendapatkan ID dari URL
$id = $_GET['id'];

// Mengambil data dari database
$sql = "SELECT id, judul, gambar, deskripsi, url FROM music WHERE id = $id";
$hasil = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($hasil);

// Periksa jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $gambar = $_POST['gambar'];
    $deskripsi = $_POST['deskripsi'];
    $url = $_POST['url'];

    // Query untuk update data
    $sqlUpdate = "UPDATE music SET judul='$judul', gambar='$gambar', deskripsi='$deskripsi', url='$url' WHERE id=$id";
    
    if (mysqli_query($koneksi, $sqlUpdate)) {
        echo "Data berhasil diperbarui.";
        header("Location: admin.php");
    } else {
        echo "Error: " . $sqlUpdate . "<br>" . mysqli_error($koneksi);
    }
}

// Tutup koneksi
mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Musik</title>
</head>
<body>
    <h1>Edit Data Musik</h1>
    <form method="post">
        <label for="judul">Judul:</label><br>
        <input type="text" id="judul" name="judul" value="<?php $data['judul'] ?>"><br>
        <label for="gambar">Gambar:</label><br>
        <input type="text" id="gambar" name="gambar" value="<?php $data['gambar'] ?>"><br>
        <label for="deskripsi">Deskripsi:</label><br>
        <textarea id="deskripsi" name="deskripsi"><?php $data['deskripsi'] ?></textarea><br>
        <label for="url">URL:</label><br>
        <input type="text" id="url" name="url" value="<?php $data['url'] ?>"><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>