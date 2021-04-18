<?php

namespace App\Controllers;
use App\Models\MascotaModel;
use App\Models\UsuarioModel;

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
		view('inicio/footer2');
		return $Inicio;
	}
	public function perfilMascota($idmascota)
	{
		$mascota1 = new MascotaModel();
		$mascotas = $mascota1->findAll();
		$usuario = new UsuarioModel();
		$usuarios = $usuario->findAll();
		$datosMascota = $this->datosMascota();
		$Inicio =
        view('inicio/header').
		view('inicio/test',array(
			'mascotaDatos' => $datosMascota
		)).
		view('inicio/perfilMascota',array(
			'mascotas' => $mascotas,
			'usuarios'=> $usuarios,
			'idMascotaSelect' => $idmascota
			
		)).
		view('inicio/footer');
		return $Inicio;
	}

	public function datosMascota(){
		$db = db_connect();
		$builder = $db -> table('mascota m');
		$builder -> select('*');
		$builder->join('usuario u', 'm.usuario_id = u.usuario_id');
		$builder->join('raza as r', 'r.raza_id = m.raza_id');
		$builder->join('direccion as d', 'd.direccion_id = u.usuario_id');
		$builder->join('tipomascota as tm', 'r.tipo_mascota = tm.tipoMascota_id');

		$mascotaDatosCompletos = $builder->get();
		return $mascotaDatosCompletos->getResultArray();
	}
}
