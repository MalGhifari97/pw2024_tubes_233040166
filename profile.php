<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>profile</title>
</head>
<style>
    .profile{
        text-align: center;
        place-content: center;
        background-color: black;
        color: white;
    }
</style>
<body>
    
<?php include'./include/navbar.php'; ?>

<div class="profile container-fluid mt-5"   style="min-height: 100vh;">
<h1>hello welcome to M-Update</h1>
</div>

<?php include'./include/footer.php';?>

<?php include'./include/mtt.php';?>
<?php include'script.php';?>    
</body>
</html>
