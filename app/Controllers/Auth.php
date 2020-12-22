<?php

namespace App\Controllers;

class Auth extends BaseController
{
	public function login()
	{
        $user_email = $this->request->getPost('user_email');
        $user_pass = $this->request->getPost('user_pass');

        if ($user_email == 'felipe@email.com' && $user_pass == 'fejao1010') {
            $user_data = [
                'is_logged' => true,
                'id'    => 1,
                'name'  => 'Felipe de Oliveira',
                'email' => 'felipe@email.com',
                'role'  => 'admin'
            ];

            session()->set($user_data);

            return redirect()->to('/dashboard');
        } else {
            $data = [
                'error'     => true,
                'message'   => 'Usuário ou senha inválidos!'
            ];

            session()->markAsFlashdata('error');
            session()->markAsFlashdata('message');
            session()->set($data);
            
            return redirect()->to('/');
        }         
    }
    
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    public function forget()
    {
        $data = [            
            'message'   => 'O link para a recuperação foi enviado para o e-mail!'
        ];

        return view('forget', $data);
    }
}
