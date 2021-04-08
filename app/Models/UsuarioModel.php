<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
	protected $table                = 'usuario';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $returnType           = 'array';
	protected $allowedFields        = ['nombre_usuario','nombre','apellido','correo','contrasena','imagen','tipo_usuario','estado','celular','telefono','fecha_ingreso'];
	

}
