<?php

namespace App\Controllers;
use App\Models\Mascota;

class Home extends BaseController
{
	public function index()
	{
        $mascotaModel = new MascotaModel($db);
        
		return view('welcome_message');
	}
}
