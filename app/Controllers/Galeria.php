<?php
namespace App\Controllers;
use CodeIgniter\Database\Query;
use App\Models\UsuarioModel;

class Galeria extends BaseController
{	  
	public function index()
	{
		$Inicio =
        view('inicio/header').
        view('inicio/test').
        view('inicio/gallery').
        view('inicio/footer2');
		return $Inicio ;
	}

}
