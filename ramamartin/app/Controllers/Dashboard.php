<?php
	namespace App\Controllers;
	use App\Models\UsersModel;
	use App\Models\PostModel;
	use App\Models\Newsletter;
	use CodeIgniter\Controller;

class Dashboard extends BaseController
{
	public function index()
	{
		$model=new PostModel();
		$model->insert([
			"banner"=>"imagen.png",
			"title"=>"EL TITULO",
			"intro"=>"Este es un Intro",
			"content"=>"Contenido del posto",
			"category"=>"1",
            "tags"=>"cultural",
            "create_at"=>date("Y-m-d"),
            "create_by"=>"1",
	
		]);
		 
	}

		public function index1()
	{
		//echo base_url();
		$Inicio=view('Inicio/header').
				view('Inicio/navbar').
				view('Inicio/inicio').
				view('Inicio/head').
				view('Inicio/footer');
		return $Inicio ;
	}

		publuc function add_newletter(){
			if($_post['email']){

			}
		}

}
