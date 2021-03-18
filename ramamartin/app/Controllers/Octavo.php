<?php namespace App\Controllers;

class Octavo extends BaseController
{	  
	public function Octavo()
	{
		$Inicio=view('Word/head').
				view('Word/nav').
				view('Word/section').
				view('Word/footer');
		return $Inicio ;
	}
}
