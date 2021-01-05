<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\RecoveryPasswordModel;
use DateTime;

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
        $user_email = $this->request->getPost('user-email');
        $user_model = new UserModel();

        $valid_email = $user_model->where('email', $user_email)->first();

        if ($valid_email) {
            $random_token = $this->generateToken();
            $data = [
                'user_id'       => $valid_email['id'],
                'email'         => $user_email,
                'token'         => $random_token,
            ];            

            $recovery_model = new RecoveryPasswordModel();

            $recovery_model->save($data);

            // Send mail
            $to = $user_email;
            $subject = 'NFSolution - Recuperação de senha';
            $recovery_link = base_url('home/changepassword?token=' . $random_token);
            $message = "
                <h2>Você solicitou a recuperação de senha</h2>
                <p>Clique no link abaixo para cadastrar uma nova senha:</p>
                <br><br><br>";
            $message .= '<a href="' . $recovery_link . '">' . $recovery_link . '</a>';

            $email = \Config\Services::email();
            $email->setTo($to);
            $email->setFrom('noreplay@nfsolution.com.br', 'Recuperação de senha');
            $email->setSubject($subject);
            $email->setMessage($message);

            if ($email->send()) {
                $data = [
                    'message'   => 'Foi um enviado um e-mail com o link para a recuperação de senha.'
                ];

                return view('forget', $data);
            } else {
                $data = [
                    'error'   => 'Ocorreu um erro ao enviar o e-mail. Entre em contato com o administrador.'
                ];

                return view('forget', $data);
            }
        } else {
            $data = [
                'error'   => 'O e-mail informado não é válido. Por favor, tente novamente.'
            ];

            return view('forget', $data);
        }
    }

    public function changePassword()
    {
        $new_password = $this->request->getPost('new-password');
        $confirm_password = $this->request->getPost('confirm-password');
        $token = $this->request->getPost('token');

        if ($new_password === $confirm_password) {
            $recovery_model = new RecoveryPasswordModel();
            $valid_token = $recovery_model->where('token', $token)->first();

            if ($valid_token) {
                $user_id = $valid_token['user_id'];
                $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

                $user_model = new UserModel();
                $user_model->save([
                    'id'        => $user_id,
                    'password'  => $hashed_password
                ]);

                $recovery_model->where('token', $token)->delete();

                $data = [
                    'message' => 'Senha alterada com sucesso!'
                ];
                return view('change_password', $data);
            } else {
                $data = [
                    'error' => 'Ocorreu um erro ao processar sua solicitação. Por favor, tente novamente mais tarde'
                ];
                return view('change_password', $data);    
            }
        } else {
            $data = [
                'error' => 'As senhas informadas não são iguais. Tente novamente'
            ];
            return view('change_password', $data);
        }
    }

    private function generateToken()
    {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $length = strlen($permitted_chars);
        $token_size = 64;
        $token = '';

        for ($i = 0; $i < $token_size; $i++) {
            $random_char = $permitted_chars[mt_rand(0, $length - 1)];
            $token .= $random_char;
        }

        return $token;
    }
}
