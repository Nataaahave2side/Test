<?php
include "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_dokter = $_POST["nama_dokter"];
    $spesialis = $_POST["spesialis"];
    $no_telp_dokter = $_POST["no_telp_dokter"];
    $alamat_dokter = $_POST["alamat_dokter"];
    $query = "INSERT INTO dokter (nama_dokter, spesialis, no_telp_dokter, alamat_dokter) 
              VALUES ('$nama_dokter', '$spesialis', '$no_telp_dokter', '$alamat_dokter')";
    if (mysqli_query($koneksi, $query)) {
        header('location:?page=dokter/index');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>
