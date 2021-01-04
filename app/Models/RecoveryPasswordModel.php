<?php

namespace App\Models;

use CodeIgniter\Model;

class RecoveryPasswordModel extends Model
{
    protected $table      = 'recovery_password';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['email', 'token', 'request_date'];

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
