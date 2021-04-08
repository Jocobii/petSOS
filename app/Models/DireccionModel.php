<?php

namespace App\Models;

use CodeIgniter\Model;

class DireccionModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'direccion';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['id','calle','colonia','codigo_postal',
										'referencia','estado','id_usuario'];

}
