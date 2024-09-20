<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PoliKlinik</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-black bg-secondary-subtle">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="oo.png" alt="" width="50" height="44">Poliklinik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-header" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav navbar-nav navbar-right">
                        <a class="nav-link" href="?page=pasien/index">Pasien</a>
                    </li>
                    <li class="nav navbar-nav navbar-right">
                        <a class="nav-link" href="?page=dokter/index">Dokter</a>
                    </li>
                    <li class="nav navbar-nav navbar-right">
                        <a class="nav-link" href="?page=rekam_medis/index">Rekam Medis</a>
                    </li>
                    <li class="nav navbar-nav navbar-right">
                        <a class="nav-link" href="logout.php">Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    <div class="container">
        <?php
        include "isi.php";
        ?>
    </div>
</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
