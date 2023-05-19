<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Riwayat Peminjaman LCD</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tanggal Peminjaman</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Digunakan Untuk</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($all_data_pinjam as $data) : ?>
                    <tr>
                        <td><?= $data->tgl_peminjaman ?></td>
                        <td><?= $data->nama_peminjam ?></td>
                        <td><?= $data->nim_peminjam ?></td>
                        <td><?= $data->kelas_peminjam ?></td>
                        <td><?= $data->tujuan_peminjaman ?></td>
                        <td>
                            <a href="<?= base_url('edit_data_pinjam') . '/' . $data->id ?>" class="btn btn-success">Edit</a>
                            <a href="<?= base_url('delete_data_pinjam') . '/' . $data->id ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            <a href="<?= base_url('add_data_pinjam') ?>" class="btn btn-primary">
                Tambah Data
            </a>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>