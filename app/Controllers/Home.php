<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		if (session()->get('is_logged')) {
			return redirect()->to('/dashboard');
		}
		return view('login');
	}

	public function forget()
	{
		if (session()->get('is_logged')) {
			return redirect()->to('/dashboard');
		}
		return view('forget');
	}
}