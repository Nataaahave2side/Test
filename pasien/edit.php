<?php
include "koneksi.php";
$id_pasien = $_GET['id_pasien'];
$query = mysqli_query($koneksi, "SELECT * FROM Pasien WHERE id_pasien='$id_pasien'");
$data = mysqli_fetch_array($query);
?>
<h1>Edit Data Pasien</h1>
<form action="?page=pasien/update" method="POST">
    <div class="mb-3">
        <label for="nama_pasien" class="form-label">Nama Pasien:</label>
        <input type="text" name="nama_pasien" class="form-control" value="<?php echo $data['nama_pasien']; ?>">
</div>
    <div class="mb-3">
    <tr>
        <td>  <label class="form-label">Jenis Kelamin</label></td>
        <select class="form-control" name="jenis_kelamin">
        <option>Laki-Laki</option>
        <option>Perempuan</option>
       </select>
        </tr>
    <div class="mb-3">
        <label for="no_telp" class="form-label">Nomor Telepon:</label>
        <input type="text" name="no_telp" class="form-control" value="<?php echo $data['no_telp']; ?>">
    </div>
    <div class="mb-3">
        <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $data['tanggal_lahir']; ?>">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat:</label>
        <input type="text" name="alamat_pasien" class="form-control" value="<?php echo $data['alamat_pasien']; ?>">
    </div>
    <div class="mb-3">
        <label for="id_kamar" class="form-label">Nama Dokter :</label>
        <select name="id_dokter" class="form-control">
            <?php
            $query_kamar = mysqli_query($koneksi, "SELECT * FROM dokter");
            while ($row_kamar = mysqli_fetch_array($query_kamar)) {
                $selected = ($row_kamar['id_dokter'] == $data['id_dokter']) ? 'selected' : '';
                echo "<option value='" . $row_kamar['id_dokter'] . "' $selected>" . $row_kamar['nama_dokter'] . "</option>";
            }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
        <input type="submit" class="btn btn-primary" value="Simpan">
    </div>
</form>