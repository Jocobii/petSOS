<?php
namespace App\Controllers;
use CodeIgniter\Database\Query;


class Blog extends BaseController
{	  
	public function index()
	{
		$Inicio =
        view('inicio/header').
        view('inicio/test').
        view('Blog/blog').
        view('inicio/footer2');
		return $Inicio ;
	}
    public function single2()
	{
		$Inicio =
        view('inicio/header').
        view('inicio/test').
        view('Blog/single2').
        view('inicio/footer2');
		return $Inicio ;
	}
    public function single()
	{
		$Inicio =
        view('inicio/header').
        view('inicio/test').
        view('Blog/single').
        view('inicio/footer2');
		return $Inicio ;
	}
    public function single3()
	{
		$Inicio =
        view('inicio/header').
        view('inicio/test').
        view('Blog/single3').
        view('inicio/footer2');
		return $Inicio ;
	}
    public function bloga()
	{
		$Inicio =
        view('inicio/header').
        view('inicio/test').
        view('Blog/bloga').
        view('inicio/footer2');
		return $Inicio ;
	}

}
