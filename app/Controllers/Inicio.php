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
			view('inicio/navbar').
			view('inicio/cards').
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

	public function iniciar_sesion(){
		$db      = \Config\Database::connect();
		$nombre_usuario = $this->request->getPost('usuario');
		$contrasena = $this->request->getPost('contrasena');
		$builder = $db ->table('usuario');
		$builder ->select('*');
		$builder->where('nombre_usuario', $nombre_usuario);
		$builder->where('contrasena',$contrasena);
		$data = $builder->get()->getResultArray();
		if($data != null){
			$session = session();
			$data = [
				"id" => $data[0]['id'],
				"usuario" => $data[0]['nombre_usuario'],
				"nombre" => $data[0]['nombre'],
				"apellido" => $data[0]['apellido'],
				"correo" => $data[0]['correo'],
				"contrasena" => $data[0]['contrasena'],
				"tipo_usuario" => $data[0]['tipo_usuario'],

			];
			$session->set($data);
			print_r($this->session->userdata());
			$Inicio = 
				view('inicio/header').
				view('inicio/navbar',array(
					'usuario' => $data
				)).
				view('inicio/cards').
				view('inicio/footer',);
				return $Inicio ;			
		}else{
			
			return $this->login();
		}
		
	}

}
