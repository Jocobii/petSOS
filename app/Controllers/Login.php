<?php

namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		$Inicio =
        view('inicio/header').
        view('inicio/test').
        view('inicio/login').
        view('inicio/footer');
		return $Inicio ;
	
	}
}
