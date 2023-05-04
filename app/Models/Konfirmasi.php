<?php

namespace App\Models;

use CodeIgniter\Model;

class Konfirmasi extends Model
{
    protected $table      = 'konfirmasi';
    protected $allowedFields = ['id_transaksi', 'id_user'];
}
