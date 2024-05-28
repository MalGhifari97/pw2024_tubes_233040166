<?php
define('BASE_URL', 'http://localhost/pw2024_tubes_233040166/');
?>
<nav class="navbar navbar-expand-lg bg-dark fixed-top">
  <div class="container-fluid" >
    <a class="navbar-brand text-white" href="#">M-Update</a>
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="background-color:white;"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="<?php echo BASE_URL; ?>index.php#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?php echo BASE_URL; ?>admin/admin.php">admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?php echo BASE_URL; ?>login.php">Login</a>
        </li>
      </ul>
      <form class="d-flex" role="search" method="GET">
        <input class="form-control me-2" id="searchInputAja" name="search" type="search" placeholder="Cari disini" aria-label="Search" value="<?php echo isset($search) ? $search : ''; ?>">
        <button class="btn btn-outline-success" type="submit">Cari</button>
      </form>
    </div>
    </div>
  </div>
</nav>
