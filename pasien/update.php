<?php
include "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_pasien = $_POST["id_pasien"];
    $nama_pasien = $_POST["nama_pasien"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $no_telp = $_POST["no_telp"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $alamat_pasien = $_POST["alamat_pasien"];
    $id_dokter = $_POST["id_dokter"];
    $query = "UPDATE Pasien 
              SET nama_pasien = '$nama_pasien', 
                  jenis_kelamin = '$jenis_kelamin', 
                  no_telp = '$no_telp', 
                  tanggal_lahir = '$tanggal_lahir', 
                  alamat_pasien = '$alamat_pasien', 
                  id_dokter = '$id_dokter'
              WHERE id_pasien = '$id_pasien'";
    if (mysqli_query($koneksi, $query)) {
        header('location:?page=pasien/index');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>
