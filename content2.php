<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "pw2024_tubes_233040166");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk mengambil data dari tabel musik
$sql = "SELECT id, judul, gambar, deskripsi, url FROM music";
$hasil = mysqli_query($koneksi, $sql);?>


<?php 
// Periksa jika hasilnya ada
if (mysqli_num_rows($hasil) > 0) {
    // output data setiap baris
    while($row = mysqli_fetch_assoc($hasil)) {
?>
    <a href="<?=$row['url']?>" style="text-decoration: none; color: black; width:auto; height:fit-content;">
        <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
       <div class="col-md-4">
       <img src="./assets/img/<?=$row['gambar']?>" class="img-fluid rounded-start" alt="...">
        </div>
       <div class="col-md-8">
        <div class="card-body">
        <h5 class="card-title"> <?=$row['judul']?></h5>
        <p><?php echo $row['deskripsi'];?></p>
        
        </div>
        </div>
        </div>
        </div>
        </a>
<?php    }
} else {
    echo "Tidak ada data";
}

// Tutup koneksi
mysqli_close($koneksi);
?>