<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>
</style>
<body>
<?php include'./include/navbar.php'; ?>
    <div class="home mt-5" id="home">
        <img src="./assets/img/m.jpg" alt="" style="object-fit:cover; width:100%;">
    </div>
<center>
<div class="container-fluid" style="flex-direction: row; display:flex; flex-wrap:wrap; padding:10px; background-color:rgb(58, 51, 51);">
<?php include'content2.php'; ?>
</div>  
</center>


<?php include'./include/footer.php';?>

<?php include'./include/mtt.php';?>
<?php include'script.php';?>    
</body>
</html>
