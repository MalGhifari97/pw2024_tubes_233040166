<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "pw2024_tubes_233040166");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash password sebelum menyimpan ke database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO user (username,  password) VALUES (?, ?)";
    $stmt = mysqli_prepare($koneksi, $query);
    mysqli_stmt_bind_param($stmt, "ss", $username, $hashed_password);

    if (mysqli_stmt_execute($stmt)) {
        echo "$username berhasil registrasi.";
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <?php include './include/mtt.php'; ?>
</head>
<body>
    <div class="form container-fluid">
        <form method="post">
            <div class="form_place">
            <h1>Daftar</h1>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="register" class="btn btn-success" style="font-size: larger; width: fit-content;">
                <a href="<?php echo BASE_URL; ?>login.php" class="btn btn-primary" style="font-size: larger; width: fit-content; place-content: center;">kembali</a>
            </div>
            </div>
        </form>
</body>
</html>