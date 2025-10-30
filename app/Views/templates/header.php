<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul; ?></title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/style.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

 
<?php
$url = $_GET['url'] ?? '';
$segment = explode('/', trim($url, '/'))[0] ?? 'home';
?>
<nav class="navbar navbar-dark bg-dark navbar-expand-lg px-5">

   
    <a class="navbar-brand " href="<?php echo BASEURL?>">
      <i class="fa-solid fa-shirt me-2" style="color: #63E6BE; font-size: 1.2rem;"></i>
      <span style="font-size: 1rem;">Pencatatan Baju</span>
    </a>

    <!-- Tombol Toggle untuk mode mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu Navigasi -->
    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?= ($segment === '' || $segment === 'home') ? 'active' : '' ?>" href="<?php echo BASEURL?>/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($segment === 'barang') ? 'active' : '' ?>" href="<?php echo BASEURL?>/barang">Barang</a>
        </li>
      </ul>
    </div>
</nav>


