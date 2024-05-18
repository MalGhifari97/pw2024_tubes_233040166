<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "pw2024_tubes_233040166");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk mengambil data dari tabel musik
$sql = "SELECT id, judul, gambar, SUBSTRING(deskripsi, 1, 200) AS truncated_description, url FROM music";
$hasil = mysqli_query($koneksi, $sql);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <?php include '../include/mtt.php'?>
</head>
<body>
    <?= include '../include/navbar.php' ?>
    
<table class="table table-hover">
<thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Judul</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Gambar</th> 
      <th scope="col">Url</th> 
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <?php 
// Periksa jika hasilnya ada
if (mysqli_num_rows($hasil) > 0) {
    // output data setiap baris
    while($row = mysqli_fetch_assoc($hasil)) {
?>
  <tbody>
    <tr>
      <th scope="row"><?= $row['id']?></th>
      <td><?= $row['judul']?></td>
      <td><?= $row['truncated_description']?>...</td>
      <td><img src="../assets/img/<?= $row['gambar']?>" style="height: auto;width: 100px;"></td>
      <td><?= $row['url']?></td>
      <td><a href="">Hapus</a><a href="">Edit</a></td>
    </tr>
    <?php    }
} else {
    echo "Tidak ada data";
}

// Tutup koneksi
mysqli_close($koneksi);
?>
  </tbody>
</table>
<?= include '../include/footer.php' ?>
<?= include '../script.php' ?>
</body>
</html>