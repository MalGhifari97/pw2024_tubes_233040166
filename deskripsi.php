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
$result = mysqli_stmt_get_result($stmt);

// Periksa jika hasilnya ada
if ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="card mb-3" style="max-width: 540px;">';
    echo '  <div class="row g-0">';
    echo '    <div class="col-md-4">';
    echo '      <img src="assets/img/' . $row["gambar"] . '" class="img-fluid rounded-start" alt="...">';
    echo '    </div>';
    echo '    <div class="col-md-8">';
    echo '      <div class="card-body">';
    echo '        <h5 class="card-title">' . $row["judul"] . '</h5>';
    echo '        <p class="card-text">' . $row["deskripsi"] . '</p>';
    echo '      </div>';
    echo '    </div>';
    echo '  </div>';
    echo '</div>';
} else {
    echo "Data tidak ditemukan.";
}

// Tutup koneksi
mysqli_stmt_close($stmt);
mysqli_close($koneksi);
?>