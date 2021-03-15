<?php
namespace App\Models;
use CodeIgniter\Model;

class MascotaModel extends Model{
    protected $table = 'mascota';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'edad','genero','descripcion','imagen','raza_id','user_id'];


}