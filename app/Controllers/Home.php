<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$Inicio =
        view('inicio/header').
        view('inicio/test').
        view('inicio/contact').
		view('inicio/minifooter').
        view('inicio/footer2');
		return $Inicio ;
	
	}
}
