<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
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
            'company_id' => [
                'type'          => 'INT',
                'constraint'    => 11,                
            ],
            'email' => [
                'type'          => 'VARCHAR',
                'constraint'    => 50,
                'unique'        => true,                
            ],
            'password' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,                
            ],
            'role' => [
                'type'          => 'ENUM',
                'constraint'    => ['master', 'manager', 'common', 'customer'],                
            ],
            'name' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,                
            ],
            'cpf' => [
                'type'          => 'VARCHAR',
                'constraint'    => 20,
                'unique'        => true,                
            ],
            'rg' => [
                'type'          => 'VARCHAR',
                'constraint'    => 20,
                'unique'        => true,                
            ],
            'date_of_birth' => [
                'type'          => 'DATE',                
                'null'          => true,                
            ],
            'gender' => [
                'type'          => 'ENUM',
                'constraint'    => ['male', 'female'],                
                'null'          => true                
            ],
            'zip_code' => [
                'type'          => 'VARCHAR',                
                'constraint'    => 10,
                'null'          => true,                
            ],
            'address_1' => [
                'type'          => 'VARCHAR',                
                'constraint'    => 100,
                'null'          => true,                
            ],
            'address_2' => [
                'type'          => 'VARCHAR',                
                'constraint'    => 100,
                'null'          => true,                
            ],
            'number' => [
                'type'          => 'VARCHAR',                
                'constraint'    => 10,
                'null'          => true,                
            ],
            'neighborhood' => [
                'type'          => 'VARCHAR',                
                'constraint'    => 100,
                'null'          => true,                
            ],
            'city' => [
                'type'          => 'VARCHAR',                
                'constraint'    => 100,
                'null'          => true,                
            ],
            'state' => [
                'type'          => 'CHAR',                
                'constraint'    => 2,
                'null'          => true,                
            ],
            'phone_1' => [
                'type'          => 'VARCHAR',                
                'constraint'    => 20,
                'null'          => true,                
            ],
            'phone_2' => [
                'type'          => 'VARCHAR',                
                'constraint'    => 20,
                'null'          => true,                
            ],
        ];
        $this->forge->addField($fields);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('users', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}