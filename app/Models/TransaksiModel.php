<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $allowedFields = ['nama_lengkap', 'alamat', 'user_id', 'no_kartu', 'total', 'status_pemesanan'];
}
