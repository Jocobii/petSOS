<?php

namespace App\Controllers;
use CodeIgniter\Database\Query;
use App\Models\UsuarioModel;

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
			//$session->destroy();
			$data = [
				"id" => $data[0]['id'],
				"usuario" => $data[0]['nombre_usuario'],
				"nombre" => $data[0]['nombre'],
				"apellido" => $data[0]['apellido'],
				"correo" => $data[0]['correo'],
				"contrasena" => $data[0]['contrasena'],
				"imagen" => $data[0]['imagen'],
				"tipo_usuario" => $data[0]['tipo_usuario'],
				"celular" => $data[0]['celular'],
				"telefono" => $data[0]['telefono'],
				"fecha_ingreso" => $data[0]['fecha_ingreso']

			];
			
			$session->set($data);
				
			$Inicio = 
				view('inicio/header').
				view('inicio/test').
				view('inicio/inicio').
				view('inicio/footer',);
				return $Inicio;
						
		}else{
			
			return redirect()->to(base_url('/'));
		}
		
	}

	

	public function salir(){
		$session = session();
		$session -> destroy();
		return redirect() -> to (base_url('/inicio'));
	}
}
