<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        $model = new UserModel();

        $user_email = $this->request->getPost('user-email');
        $user_pass = $this->request->getPost('user-pass');
        
        $valid_user = $model->where('email', $user_email)->first();

        if ($valid_user) {
            $valid_password = password_verify($user_pass, $valid_user['password']);

            if ($valid_password) {
                $user_data = [
                    'is_logged'     => true,
                    'id'            => $valid_user['id'],
                    'name'          => $valid_user['name'],
                    'email'         => $valid_user['email'],
                    'role'          => $valid_user['role'],
                    'company_id'    => $valid_user['company_id'],
                ];

                session()->set($user_data);

                return redirect()->to('/dashboard');
            } else {
                $data = [
                    'error'     => true,
                    'message'   => 'Usuário ou senha inválidos!'
                ];

                return view('login', $data);
            }
        } else {
            $data = [
                'error'     => true,
                'message'   => 'Usuário ou senha inválidos!'
            ];

            return view('login', $data);
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
