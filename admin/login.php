<<<<<<< HEAD
<?php
session_start();

// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "pw2024_tubes_233040166");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Inisialisasi variabel
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Proses form saat form di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Mohon masukkan username.";
    } else {
        $username = htmlspecialchars(trim($_POST["username"]));
    }

    // Validasi password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Mohon masukkan password.";
    } else {
        $password = htmlspecialchars(trim($_POST["password"]));
    }

    // Validasi kredensial
    if (empty($username_err) && empty($password_err)) {
        // Siapkan pernyataan select untuk admin
        $sql_admin = "SELECT id, username, password FROM admin WHERE username = ?";

        if ($stmt_admin = mysqli_prepare($koneksi, $sql_admin)) {
            mysqli_stmt_bind_param($stmt_admin, "s", $param_username);
            $param_username = $username;

            // Coba untuk menjalankan pernyataan
            if (mysqli_stmt_execute($stmt_admin)) {
                mysqli_stmt_store_result($stmt_admin);

                // Periksa jika username ada di database admin
                if (mysqli_stmt_num_rows($stmt_admin) == 1) {
                    mysqli_stmt_bind_result($stmt_admin, $id, $username, $hashed_password);
                    if (mysqli_stmt_fetch($stmt_admin)) {
                        if (password_verify($password, $hashed_password)) {
                            // Password benar, mulai sesi baru
                            session_start();
                            
                            // Simpan data ke sesi
                            $_SESSION["loggedin_admin"] = true;
                            $_SESSION["id_admin"] = $id;
                            $_SESSION["username_admin"] = $username;
                            
                            // Redirect ke halaman admin
                            header("Location: admin.php");
                            exit();
                        } else {
                            // Password tidak valid
                            $login_err = "Password yang Anda masukkan salah.";
                        }
                    }
                } else {
                    // Username tidak ditemukan
                    $login_err = "Username tidak ditemukan.";
                }
            } else {
                echo "Terjadi kesalahan. Silakan coba lagi nanti.";
            }

            // Tutup pernyataan
            mysqli_stmt_close($stmt_admin);
        }
    }

    // Tutup koneksi
    mysqli_close($koneksi);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <?php include '../include/mtt.php'; ?>
</head>

<style>
        .form {
            min-height: 90vh;

        }
        .login {
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
            font-family: "Tilt Neon", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            font-variation-settings:
            "XROT" 0,
            "YROT" 0;
        }
        input {
            max-width: 400px;
           
        }
        body {
            background-image: url(../assets/img/bb.jpg);
            background-size: cover;
        }
    </style>
<body>
    <div class="form container-fluid">
        <form method="post">
            <div class="login container container-fluid">
                <h1>Login Admin</h1>
                <?php 
                if (!empty($login_err)) {
                    echo '<div class="alert alert-danger">' . $login_err . '</div>';
                }
                ?>
                <div style="display:flex;flex-direction: column;  align-items: center; margin-bottom: 2vh;"> 
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required class="form-control me-2" style="outline:auto; <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required class="form-control me-2" style="outline:auto; <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>
                <input type="submit" value="Login" class="btn btn-outline-success" style="font-size: larger; width: fit-content;">
                <a href="../index.php" class="btn btn-outline-light" style="font-size: larger; width: fit-content; place-content: center;">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>
=======
<?php
session_start();

// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "pw2024_tubes_233040166");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Inisialisasi variabel
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Proses form saat form di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Mohon masukkan username.";
    } else {
        $username = htmlspecialchars(trim($_POST["username"]));
    }

    // Validasi password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Mohon masukkan password.";
    } else {
        $password = htmlspecialchars(trim($_POST["password"]));
    }

    // Validasi kredensial
    if (empty($username_err) && empty($password_err)) {
        // Siapkan pernyataan select untuk admin
        $sql_admin = "SELECT id, username, password FROM admin WHERE username = ?";

        if ($stmt_admin = mysqli_prepare($koneksi, $sql_admin)) {
            mysqli_stmt_bind_param($stmt_admin, "s", $param_username);
            $param_username = $username;

            // Coba untuk menjalankan pernyataan
            if (mysqli_stmt_execute($stmt_admin)) {
                mysqli_stmt_store_result($stmt_admin);

                // Periksa jika username ada di database admin
                if (mysqli_stmt_num_rows($stmt_admin) == 1) {
                    mysqli_stmt_bind_result($stmt_admin, $id, $username, $hashed_password);
                    if (mysqli_stmt_fetch($stmt_admin)) {
                        if (password_verify($password, $hashed_password)) {
                            // Password benar, mulai sesi baru
                            session_start();
                            
                            // Simpan data ke sesi
                            $_SESSION["loggedin_admin"] = true;
                            $_SESSION["id_admin"] = $id;
                            $_SESSION["username_admin"] = $username;
                            
                            // Redirect ke halaman admin
                            header("Location: admin.php");
                            exit();
                        } else {
                            // Password tidak valid
                            $login_err = "Password yang Anda masukkan salah.";
                        }
                    }
                } else {
                    // Username tidak ditemukan
                    $login_err = "Username tidak ditemukan.";
                }
            } else {
                echo "Terjadi kesalahan. Silakan coba lagi nanti.";
            }

            // Tutup pernyataan
            mysqli_stmt_close($stmt_admin);
        }
    }

    // Tutup koneksi
    mysqli_close($koneksi);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <?php include '../include/mtt.php'; ?>
</head>

<style>
        .form {
            min-height: 90vh;

        }
        .login {
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
            font-family: "Tilt Neon", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            font-variation-settings:
            "XROT" 0,
            "YROT" 0;
        }
        input {
            max-width: 400px;
           
        }
        body {
            background-image: url(/assets/img/bb.jpg);
            background-size: cover;
        }
    </style>
<body>
    <div class="form container-fluid">
        <form method="post">
            <div class="login container container-fluid">
                <h1>Login Admin</h1>
                <?php 
                if (!empty($login_err)) {
                    echo '<div class="alert alert-danger">' . $login_err . '</div>';
                }
                ?>
                <div style="display:flex;flex-direction: column;  align-items: center; margin-bottom: 2vh;"> 
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required class="form-control me-2" style="outline:auto; <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required class="form-control me-2" style="outline:auto; <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>
                <input type="submit" value="Login" class="btn btn-outline-success" style="font-size: larger; width: fit-content;">
                <a href="../index.php" class="btn btn-outline-light" style="font-size: larger; width: fit-content; place-content: center;">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>
>>>>>>> 44c8711d1d43c490a094f5788b770673a95857bd
