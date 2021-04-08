<?php
namespace App\Controllers;
use CodeIgniter\Database\Query;
use App\Models\UsuarioModel;

class Perfil extends BaseController
{	  
	public function index()
	{
		$Inicio =
        view('inicio/header').
        view('inicio/test').
        view('inicio/profile').
        view('inicio/footer');
		return $Inicio ;
	}

}
