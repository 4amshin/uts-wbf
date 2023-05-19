<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Tambah Data</h1>

        <form action="<?= base_url('proses_add_data') ?>" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Berkunjung</label>
                <input type="text" class="form-control" id="tgl_peminjaman" name="tgl_peminjaman" placeholder="contoh: 01 Januari 2010">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" placeholder="contoh: Muhammad Fulan">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas_peminjam" name="kelas_peminjam" placeholder="contoh: A1(Nama Ruangan) - Webserver(Nama Mata Kuliah)">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim_peminjam" name="nim_peminjam" placeholder="contoh: 2001122333">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Digunakan Untuk</label>
                <input type="text" class="form-control" id="tujuan_peminjaman" name="tujuan_peminjaman" placeholder="contoh: Presentasi Materi">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>