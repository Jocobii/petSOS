<?php
namespace App\Models;
use CodeIgniter\Model;

class CategoriaModel extends Model{
    protected $table = 'mascota';
    protected $primaryKey = 'tipoMascota_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';


    protected $allowedFields = ['tipoMascota_nombre'];


}