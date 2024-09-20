<?php
include "koneksi.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Data</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH DATA
            </div>
            <div class="card-body">
              <form action="?page=pasien/simpan" method="POST">

            <div class="form-group">
                  <label>Nama Pasien</label>
                  <input type="text" name="nama_pasien" placeholder="Masukkan Nama Pasien" class="form-control">
            </div>


            <div class="form-group">
                <label class="form-label">Jenis Kelamin:</label>
            <div>
                <input type="radio" name="jenis_kelamin" id="L" value="L">
                <label for="L">Laki-laki</label>
            </div>
            <div>
                <input type="radio" name="jenis_kelamin" id="P" value="P">
                <label for="P">Perempuan</label>
            </div>
                </div>

                <div class="form-group">
                  <label>No Telepon</label>
                  <input type="text" name="no_telp" placeholder="Masukkan No Telpeon" class="form-control">
                </div>

                <div class="form-group">
                  <label>Tanggal Lahir </label>
                  <input type="date" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat </label>
                  <input type="text" name="alamat_pasien" placeholder="Masukkan Alamat" class="form-control">
                </div>
    <div class="mb-3">
        <label for="id_dokter" class="form-label">Nama Dokter:</label>
        <select name="id_dokter" class="form-control">
            <?php
            $query_dokter = mysqli_query($koneksi, "SELECT * FROM dokter");
            while ($row_dokter = mysqli_fetch_array($query_dokter)) {
                echo "<option value='" . $row_dokter['id_dokter'] . "'>" . $row_dokter['nama_dokter'] . "</option>";
            }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Simpan">
    </div>
</form>