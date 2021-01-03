<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTimestampFields extends Migration
{
    public function up()
    {
        $fields = [
            'created_at' => [
                'type'  => 'DATETIME',
                'null'  =>  true 
            ],
            'updated_at' => [
                'type'  => 'DATETIME',
                'null'  =>  true 
            ],
            'deleted_at' => [
                'type'  => 'DATETIME',
                'null'  =>  true 
            ],
        ];

        $this->forge->addColumn('companies', $fields);
        $this->forge->addColumn('modules', $fields);
        $this->forge->addColumn('permission_modules', $fields);
        $this->forge->addColumn('recovery_password', $fields);
        $this->forge->addColumn('users', $fields);        
    }

    public function down()
    {
        //
    }
}