<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "pw2024_tubes_233040166");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mendapatkan ID dari URL
$id = isset($_GET['id']) ? $_GET['id'] : die('ID tidak ditemukan.');

// Query untuk mengambil data dari tabel musik berdasarkan ID
$sql = "SELECT id, judul, gambar, deskripsi FROM music WHERE id = ?";
$stmt = mysqli_prepare($koneksi, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<?php
// Periksa jika hasilnya ada
if ($row = mysqli_fetch_assoc($result)) { ?>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="assets/img/<?php echo htmlspecialchars($row['gambar']); ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($row['judul']); ?></h5>
                    <p class="card-text"><?php echo htmlspecialchars($row['deskripsi']); ?></p>
                </div>
            </div>
        </div>
    </div>
<?php } else {
    echo "Data tidak ditemukan.";
}

// Tutup koneksi
mysqli_stmt_close($stmt);
mysqli_close($koneksi);
?>
</body>
</html>

