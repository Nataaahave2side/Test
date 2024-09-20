<?php
include "koneksi.php";
?>

<h1 class="mt-4">Pasien</h1>
<button class="btn btn-success"><a style="color: white;text-decoration:none" href="?page=pasien/tambah">Tambah Data Pasien</a></button>
<div class="mb-3">
        <br>
<table class="table table-white table-striped">
  <tr>
            <th>Nama Pasien</th>
            <th>Nama Dokter</th>
            <th>Jenis Kelamin</th>
            <th>No Telepon</th>
            <th>Kelahiran</th>
            <th>Alamat</th>
            <th>Aksi</th>
  </tr>
  <?php
  $query = mysqli_query($koneksi, "SELECT *
   FROM Pasien
   LEFT JOIN Dokter ON Pasien.id_dokter = Dokter.id_dokter");

  while ($data = mysqli_fetch_array($query)) {
    $id_pasien = $data['id_pasien'];
    $query_2 = mysqli_query($koneksi, "SELECT * FROM rekam_medis WHERE id_pasien = $id_pasien");
    $data_2 = mysqli_fetch_array($query_2);
  ?>
    <tr>
      <td><?php echo $data['nama_pasien'] ?></td>
      <td><?php echo $data['nama_dokter'] ?></td>
      <td><?php echo $data['jenis_kelamin'] ?></td>
      <td><?php echo $data['no_telp'] ?></td>
      <td><?php echo $data['tanggal_lahir'] ?></td>
      <td><?php echo $data['alamat_pasien'] ?></td>
      <td>
        <?php if (empty($data_2)) { ?>
          <button class="btn btn-danger"><a style="color: white;text-decoration:none" href="?page=pasien/hapus&id_pasien=<?php echo $data['id_pasien'] ?>">Hapus</a></button>
        <?php } ?>
        <button class="btn btn-warning"><a style="color: white;text-decoration:none" href="?page=pasien/edit&id_pasien=<?php echo $data['id_pasien'] ?>">Edit</a></button>
      </td>
    </tr>
  <?Php
  }
  ?>
</table>