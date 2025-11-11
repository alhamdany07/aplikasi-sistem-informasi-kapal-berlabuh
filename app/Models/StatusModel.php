<?php
namespace App\Models;
use CodeIgniter\Model;

class StatusModel extends Model
{
    protected $table = 'status_kapal';
    protected $primaryKey = 'id_status';
    protected $allowedFields = ['id_kapal', 'status'];
}
