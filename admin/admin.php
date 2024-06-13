<?php
session_start();
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "pw2024_tubes_233040166");
if (!isset($_SESSION["loggedin_admin"]) || $_SESSION["loggedin_admin"] !== true) {
  header("Location: login.php");
  exit;
}
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
    <?php include '../include/mtt.php';?>
</head>
<body>
    <?php include '../include/navbar.php';?>
    <a href="tambah.php" class="btn btn-primary mt-5" style="float: left;">Tambah</a>
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
      <th scope="row"><?php echo $row['id'];?></th>
      <td><?php echo  $row['judul'];?></td>
      <td><?php echo $row['truncated_description'];?>...</td>
      <td><img src="../assets/img/<?php echo $row['gambar'];?>" style="height: auto;width: 100px;"></td>
      <td><?php echo $row['url'];?></td>
      <td>
      <td><a  class="btn btn-outline-danger" href="hapus.php?id=<?php echo $row['id'];?>">Hapus</a>
      <a class="btn btn-outline-warning" href="edit.php?id=<?php echo $row['id'];?>">Edit</a></td>
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
<?php include '../include/footer.php' ?>
<?php include '../script.php' ?>
</body>
</html>
