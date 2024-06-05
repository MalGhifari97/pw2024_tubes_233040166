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
<style>
        .form {
            min-height: 90vh;
            width: 75vh;

        }
        .register {
            margin-top: 5vh ;
            width: 75vh;
            min-height: 80vh;
            border: 5px solid white;
            border-radius: 20px;
            place-content: center;
            justify-content: center ;
            text-align: center;
            background-color: black;
            color: white;
        }
        input {
            max-width: 400px;

           
        }
        body {
            background-image: url(assets/img/bb.jpg);
            background-size: cover;
        }
    </style>
<body>
    <div class="form container-fluid">
        <form method="post">
            <div class="register container-sm" style="text-align: -webkit-center;">
            <h1>Daftar</h1>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required class="form-control me-2" style="outline:auto;">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required class="form-control me-2" style="outline:auto;">
            <div>
                <br>
            <input type="submit" value="register" class="btn btn-success" style="font-size: larger; width: fit-content;">
                <a href="index.php" class="btn btn-outline-light" style="font-size: larger; width: fit-content; place-content: center;">kembali</a>
                </div>
            </div>
            </div>
        </form>
</body>
</html>