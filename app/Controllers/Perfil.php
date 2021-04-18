<?php
namespace App\Controllers;
use CodeIgniter\Database\Query;
use App\Models\MascotaModel;
use App\Models\DireccionModel;

class Perfil extends BaseController
{	  
	public function index()
	{
		$mascota1 = new MascotaModel();
		$mascotas = $mascota1->findAll();

		$direccion = new DireccionModel();
		$direcciones = $direccion -> findAll();
		$Inicio =
        view('inicio/header').
        view('inicio/test').
        view('inicio/profile',array(
			'direccion' => $direcciones,
			'mascotas' => $mascotas
		)).
		
        view('inicio/footer');
		return $Inicio ;
	}

}
