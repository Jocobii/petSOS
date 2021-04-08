<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
class Usuario extends BaseController
{

	public function usuariosDatosCompletos(){
		$db = db_connect();
		$builder = $db -> table('direccion d');
		$builder->join('usuario u', 'd.id = u.id');
		$query = $builder->get();
		$query->getResultArray();
		return $query;
	}

}
