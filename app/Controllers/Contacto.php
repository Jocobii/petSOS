<?php
namespace App\Controllers;
use CodeIgniter\Database\Query;
use App\Models\UsuarioModel;

class Contacto extends BaseController
{	  
	public function index()
	{
		$Inicio =
        view('inicio/header').
        view('inicio/test').
        view('inicio/contact').
        view('inicio/footer2');
		return $Inicio ;
	}

}
