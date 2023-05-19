<?php

namespace App\Models;

use CodeIgniter\Model;

class PinjamModel extends Model 
{
    protected $table = 'tb_peminjaman';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['tgl_peminjaman', 'nama_peminjam', 'kelas_peminjam', 'nim_peminjam', 'tujuan_peminjaman'];
}