<?php

namespace App\Models;

use CodeIgniter\Model;

class BiayaModel extends Model
{
    protected $table = 'biaya';
    protected $primaryKey = 'id';
    protected $allowedFields = ['jenis_kapal', 'biaya_tambat', 'biaya_berlabuh', 'keterangan'];
}
