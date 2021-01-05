<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUserIdFields extends Migration
{
    public function up()
    {
        $fields = [
            'user_id' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'after'         => 'id'             
            ],            
        ];
       
        $this->forge->addColumn('recovery_password', $fields);        
    }

    public function down()
    {
        //
    }
}