<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['company_id', 'email', 'password', 'role', 'name', 'cpf', 'rg', 'date_of_birth', 'gender', 'zip_code', 'address_1', 'address_2', 'number', 'neighborhood', 'city', 'state', 'phone_1', 'phone_2'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
        'email' => 'valid_email',
    ];
    protected $validationMessages = [
        'email' => 'Informe um e-mail válido!',
    ];
    protected $skipValidation     = false;
}
