<?php
include "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pasien = $_POST["nama_pasien"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $no_telp = $_POST["no_telp"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $alamat_pasien = $_POST["alamat_pasien"];
    $id_dokter = $_POST["id_dokter"];
    $query = "INSERT INTO Pasien (nama_pasien, jenis_kelamin, no_telp, tanggal_lahir, alamat_pasien, id_dokter) 
              VALUES ('$nama_pasien', '$jenis_kelamin', '$no_telp', '$tanggal_lahir', '$alamat_pasien', '$id_dokter')";
    if (mysqli_query($koneksi, $query)) {
        header('location:?page=pasien/index');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>
