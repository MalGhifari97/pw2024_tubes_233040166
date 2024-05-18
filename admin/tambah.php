<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "pw2024_tubes_233040166";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Menangani data yang dikirim dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $gambar = $_POST['gambar'];
    $deskripsi = $_POST['deskripsi'];

    $sql = "INSERT INTO mahasiswa (nrp, nama, fakultas, jurusan, ipk, status, email, gambar) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssdsss", $nrp, $nama, $fakultas, $jurusan, $ipk, $status, $email, $gambar);

    if ($stmt->execute()) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h2>Form Tambah Data Mahasiswa</h2>
    <form method="POST" action="plus.php">
        NRP: <input type="text" name="nrp" required><br>
        Nama: <input type="text" name="nama" required><br>
        Fakultas: <input type="text" name="fakultas" required><br>
        Jurusan: <input type="text" name="jurusan" required><br>
        IPK: <input type="number" step="0.01" name="ipk" required><br>
        Status: <input type="text" name="status" required><br>
        Email: <input type="email" name="email" required><br>
        Gambar: <input type="text" name="gambar" required><br>
        <input type="submit" value="Tambahkan">
    </form>
</body>
</html>