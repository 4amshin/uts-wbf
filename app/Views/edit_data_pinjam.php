<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Edit Data</h1>

        <form action="<?= base_url('proses_edit_data') ?>" method="POST">
        <input type="hidden" class="form-control" id="id_pinjam" name="id_pinjam" value="<?= $data_pinjam->id ?>">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Berkunjung</label>
                <input type="text" class="form-control" id="tgl_peminjaman" name="tgl_peminjaman" value="<?= $data_pinjam->tgl_peminjaman ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Tamu</label>
                <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" value="<?= $data_pinjam->nama_peminjam ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="kelas_peminjam" name="kelas_peminjam" value="<?= $data_pinjam->kelas_peminjam ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">No Telepon</label>
                <input type="text" class="form-control" id="nim_peminjam" name="nim_peminjam" value="<?= $data_pinjam->nim_peminjam ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Keperluan</label>
                <input type="text" class="form-control" id="tujuan_peminjaman" name="tujuan_peminjaman" value="<?= $data_pinjam->tujuan_peminjaman ?>">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>