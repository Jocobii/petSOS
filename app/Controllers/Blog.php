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
    public function blogsa1()
	{
		$Inicio =
        view('inicio/header').
        view('inicio/test').
        view('Blog/blogSA1').
        view('inicio/footer2');
		return $Inicio ;
	}
    public function blogsa2()
	{
		$Inicio =
        view('inicio/header').
        view('inicio/test').
        view('Blog/blogSA2').
        view('inicio/footer2');
		return $Inicio ;
	}
    public function blogsa3()
	{
		$Inicio =
        view('inicio/header').
        view('inicio/test').
        view('Blog/blogSA3').
        view('inicio/footer2');
		return $Inicio ;
	}
    public function blogc()
	{
		$Inicio =
        view('inicio/header').
        view('inicio/test').
        view('Blog/blogc').
        view('inicio/footer2');
		return $Inicio ;
	}
    public function blogc1()
	{
		$Inicio =
        view('inicio/header').
        view('inicio/test').
        view('Blog/blogC1').
        view('inicio/footer2');
		return $Inicio ;
	}
    public function blogc2()
	{
		$Inicio =
        view('inicio/header').
        view('inicio/test').
        view('Blog/blogC2').
        view('inicio/footer2');
		return $Inicio ;
	}
    public function blogc3()
	{
		$Inicio =
        view('inicio/header').
        view('inicio/test').
        view('Blog/blogC3').
        view('inicio/footer2');
		return $Inicio ;
	}
    public function blogad()
	{
		$Inicio =
        view('inicio/header').
        view('inicio/test').
        view('Blog/blogad').
        view('inicio/footer2');
		return $Inicio ;
	}
    public function blogad1()
	{
		$Inicio =
        view('inicio/header').
        view('inicio/test').
        view('Blog/blogAD1').
        view('inicio/footer2');
		return $Inicio ;
	}
    public function blogad2()
	{
		$Inicio =
        view('inicio/header').
        view('inicio/test').
        view('Blog/blogAD2').
        view('inicio/footer2');
		return $Inicio ;
	}
    public function blogad3()
	{
		$Inicio =
        view('inicio/header').
        view('inicio/test').
        view('Blog/blogAD3').
        view('inicio/footer2');
		return $Inicio ;
	}

}
