<?php
include "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_dokter = $_POST["id_dokter"];
    $nama_dokter = $_POST["nama_dokter"];
    $spesialis = $_POST["spesialis"];
    $no_telp_dokter = $_POST["no_telp_dokter"];
    $alamat_dokter = $_POST["alamat_dokter"];
    $query = "UPDATE dokter 
              SET nama_dokter = '$nama_dokter', 
              spesialis = '$spesialis', 
                  no_telp_dokter = '$no_telp_dokter', 
                  alamat_dokter = '$alamat_dokter' 
              WHERE id_dokter = '$id_dokter'";
    if (mysqli_query($koneksi, $query)) {
        header('location:?page=dokter/data_dokter');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
