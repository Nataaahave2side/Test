<?php
include "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_rekam_medis = $_POST["id_rekam_medis"];
    $tanggal = $_POST["tanggal"];
    $pemeriksaan = $_POST["pemeriksaan"];
    $keluhan = $_POST["keluhan"];
    $obat = $_POST["obat"];
    $query = "UPDATE rekam_medis 
              SET tanggal = '$tanggal', 
                  pemeriksaan = '$pemeriksaan', 
                  keluhan = '$keluhan', 
                  obat = '$obat'
              WHERE id_rekam_medis = '$id_rekam_medis'";
    if (mysqli_query($koneksi, $query)) {
        header('location:?page=dokter/index');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>
