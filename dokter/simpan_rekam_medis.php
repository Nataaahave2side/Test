<?php
include "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_pasien = $_POST["id_pasien"];
    $tanggal = $_POST["tanggal"];
    $keluhan = $_POST["keluhan"];
    $pemeriksaan = $_POST["pemeriksaan"];
    $obat = $_POST["obat"];
    $query = "INSERT INTO rekam_medis (id_pasien, tanggal, keluhan, pemeriksaan, obat) 
              VALUES ('$id_pasien', '$tanggal', '$keluhan', '$pemeriksaan', '$obat')";
    if (mysqli_query($koneksi, $query)) {
        header('location:?page=dokter/index');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>
