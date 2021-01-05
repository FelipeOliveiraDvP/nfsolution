<?php

namespace App\Controllers;

use App\Models\RecoveryPasswordModel;
use DateTime;

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

	public function changePassword()
	{
		$token = $this->request->getVar('token');

		if (!$token) {
			return redirect()->to('/');
		}

		$model = new RecoveryPasswordModel();

		$valid_token = $model->where('token', $token)->first();

		if ($valid_token) {			
			$request_date = new DateTime($valid_token['request_date']);
			$now = new DateTime('now');
			$diff = $request_date->diff($now);
			$hours_to_expire = 48;

			if ($diff->h > $hours_to_expire) {
				$model->where('token', $token)->delete();

				$data = [
					'error' => 'O token informado não é válido ou está expirado. Por favor, faça uma nova solicitação.'
				];
				return view('change_password', $data);	
			} else {
				$data = [
					'token' => $valid_token['token']
				];
				return view('change_password', $data);
			}
		} else {
			$data = [
				'error' => 'O token informado não é válido ou está expirado. Por favor, faça uma nova solicitação.'
			];
			
			return view('change_password', $data);
		}		
	}
}