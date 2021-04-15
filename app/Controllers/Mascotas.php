<?php

namespace App\Controllers;
use App\Models\MascotaModel;

class Mascotas extends BaseController
{
	public function index()
	{
		$mascota=new MascotaModel();
		$mascotas= $mascota->findAll();
		$Inicio =
        view('inicio/header').
		view('inicio/test').
		view('inicio/cards',array('mascotas' =>$mascotas )).
		view('inicio/footer');
		return $Inicio;
	}
	public function formularioMascota($idmascota)
	{
		
		$mascota=['id'=>$idmascota];
		$Inicio =
        view('inicio/header').
		view('inicio/test').
		view('inicio/pruebas',$mascota).
		view('inicio/footer');
		return $Inicio;
	}

}
