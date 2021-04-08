<?php
namespace App\Controllers;
use CodeIgniter\Database\Query;
use App\Models\UsuarioModel;
use App\Models\DireccionModel;

class Perfil extends BaseController
{	  
	public function index()
	{
		$direccion = new DireccionModel();
		$direcciones = $direccion -> findAll();
		$Inicio =
        view('inicio/header').
        view('inicio/test').
        view('inicio/profile',array(
			'direccion' => $direcciones
		)).
        view('inicio/footer');
		return $Inicio ;
	}

	public function obtenerDireccionUsuario(){
		
		
	}

}
