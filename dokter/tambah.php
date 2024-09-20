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
              <form action="?page=dokter/simpan" method="POST">

            <div class="form-group">
                  <label>Nama Dokter</label>
                  <input type="text" name="nama_dokter" placeholder="Masukkan Nama Dokter" class="form-control">
            </div>

            <div class="form-group">
                  <label>Spesialis</label>
                  <input type="text" name="spesialis" placeholder="Masukkan Spesialis Dokter" class="form-control">
            </div>

                <div class="form-group">
                  <label>No Telepon</label>
                  <input type="text" name="no_telp_dokter" placeholder="Masukkan No Telpeon" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat </label>
                  <input type="text" name="alamat_dokter" placeholder="Masukkan Alamat" class="form-control">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>