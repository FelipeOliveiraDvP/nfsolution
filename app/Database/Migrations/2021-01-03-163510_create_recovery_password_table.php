<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRecoveryPasswordTable extends Migration
{
    public function up()
    {
        $fields = [
            'id' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => true,
                'auto_increment'=> true,                                
            ],
            'email' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,                                
            ],
            'token' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,                                
            ],
            'request_date' => [
                'type'          => 'TIMESTAMP',                                
            ],            
        ];
        $this->forge->addField($fields);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('recovery_password', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('recovery_password');
    }
}