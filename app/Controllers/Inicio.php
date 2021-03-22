<?php namespace App\Controllers;

class Inicio extends BaseController
{	  
	public function Inicio()
	{
	$Inicio=
				view('inicio/header').
				view('inicio/navbar').
				view('inicio/inicio').
				view('inicio/cards').
				view('inicio/footer');
		return $Inicio ;
		echo base_url();
	}
}
