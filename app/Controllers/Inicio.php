<?php
namespace App\Controllers;
use CodeIgniter\Database\Query;
use App\Models\UsuarioModel;

class Inicio extends BaseController
{	  
	public function inicio()
	{
		$Inicio =
		view('inicio/header').
		view('inicio/test').
		view('inicio/carrosel').
		view('inicio/video').
		view('inicio/blog').
		view('inicio/minifooter').
		view('inicio/footer');
			return $Inicio ;
	
	}

	public function login(){
		
		$Inicio =
			view('inicio/header').
			view('inicio/test').
			view('inicio/login').
			view('inicio/minifooter').
			view('inicio/footer');
			return $Inicio ;
	}

}
