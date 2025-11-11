<?php

namespace App\Models;

use CodeIgniter\Model;

class KapalModel extends Model
{
    protected $table = 'kapal';
    protected $primaryKey = 'id_kapal';
    protected $allowedFields = [
        'nama_kapal', 'tanda_selar', 'tanggal_tiba', 'tanggal_berangkat', 'status'
    ];
}
