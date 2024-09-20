<?php
require_once "koneksi.php";
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PoliKlinik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <marquee behavior="alternate" direction="right" width="100%">
                Selamat Datang
            </marquee>
            <h1 class="display-6 mt-4">POLIKLINIK</h1>
            <p class="lead"></p>
        </div>
    </div>
    <div class="container d-flex justify-content-between flex-wrap">
        <div class="card mb-3" style="width: 18rem;">
            <img src="dokterr.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Dokter Spesialis</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="?page=dokter/index" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card mb-3" style="width: 18rem;">
            <img src="rekam medis.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">medical records</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="?page=rekam_medis/index" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card mb-3" style="width: 18rem;">
            <img src="images.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Pasien</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="?page=pasien/index" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
