<?php namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
		$data['title'] = "Login";		
		$data['viewName'] = "login";		
		echo view('viewMain', $data);
	}
}
