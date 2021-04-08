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
			view('inicio/inicio').
			view('inicio/footer');
			return $Inicio ;
	
	}

	public function login(){
		
		$Inicio =
			view('inicio/header').
			view('inicio/navbar').
			view('inicio/login').
			view('inicio/footer');
			return $Inicio ;
	}

}
