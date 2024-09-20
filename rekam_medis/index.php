<?php
include "koneksi.php";
?>
<h1 class="mt-4">Rekam Medis</h1>
<div class="mb-3">
<table class="table table-white table-striped">
    <tr>
            <th>Nama Pasien</th>
            <th>Nama Dokter</th>
            <th>Keluhan</th>
            <th>Pemeriksaan</th>
            <th>Obat</th>
            <th>Alamat Pasien</th>
            <th>Tanggal</th>
            <th>Cetak</th>
    </tr>
    <?php
    $query = mysqli_query($koneksi, "SELECT *, Pasien.nama_pasien, Pasien.id_dokter, Pasien.alamat_pasien
   FROM rekam_medis
   LEFT JOIN Pasien ON rekam_medis.id_pasien = pasien.id_pasien");

    while ($data = mysqli_fetch_array($query)) {
        $id_dokter = $data['id_dokter'];
        $query_2 = mysqli_query($koneksi, "SELECT * FROM dokter WHERE id_dokter = $id_dokter");
        $data_2 = mysqli_fetch_array($query_2);
    ?>
        <tr>
            <td><?php echo $data['nama_pasien'] ?></td>
            <td><?php echo $data_2['nama_dokter'] ?></td>
            <td><?php echo $data['keluhan'] ?></td>
            <td><?php echo $data['pemeriksaan'] ?></td>
            <td><?php echo $data['obat'] ?></td>
            <td><?php echo $data['alamat_pasien'] ?></td>
            <td><?php echo $data['tanggal'] ?></td>
            <td> 
                <button class="btn btn-primary">
                    <a style="color: white;text-decoration:none" href="rekam_medis/cetak.php?id_pasien=<?php echo $data['id_pasien'] ?>">Cetak</a>
                </button>
            </td>
        </tr>

    <?Php
    }
    ?>
</table>
