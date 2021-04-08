<?php

namespace App\Controllers;
use App\Models\Mascota;

class Mascotas extends BaseController
{
	public function index()
	{
		$Inicio =
        view('inicio/header').
		view('inicio/test').
		view('inicio/cards').
		view('inicio/footer');
		return $Inicio;
	}
}
