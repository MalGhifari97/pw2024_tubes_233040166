<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "pw2024_tubes_233040166");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
$search = isset($_GET["search"]) ? $_GET["search"] : null ;
// Query untuk mengambil data dari tabel musik
$sql = "SELECT id, judul, gambar, deskripsi, url FROM music";
if ($search) {
    $sql .=" WHERE judul LIKE '%$search%'";
  }
  $hasil = mysqli_query($koneksi, $sql);?>


<?php 
// Periksa jika hasilnya ada
if (mysqli_num_rows($hasil) > 0) {
    // output data setiap baris
    while($row = mysqli_fetch_assoc($hasil)) {
?>
<div class="container-sm" style="width: 410px; margin:0;">
<a href="<?=$row['url']?>" style="text-decoration: none; color: black; width:400px;">
        <div class="card mb-3" style="max-width: 400px; border: 6px solid  black; border-radius: 10px ; display:flex; flex-wrap:wrap; max-height: 500px; height:490px;">
        <div class="row g-0" style="flex:1;">
       <div class="container-fluid" style="margin: 0; padding:0;">
       <img src="./assets/img/<?=$row['gambar']?>" class="img-fluid rounded-start" alt="..." style="width:100%;">
        </div>
       <div class="container-fluid">
        <div class="card-body">
        <h5 class="card-title"> <?=$row['judul']?></h5>
        <p style="line-height: 1.5;"><?php echo $row['deskripsi'];?></p>
        
        </div>
        </div>
        </div>
        </div>
        </a>
</div>
    
<?php    }
} else {
    echo "Tidak ada data";
}

// Tutup koneksi
mysqli_close($koneksi);
?>