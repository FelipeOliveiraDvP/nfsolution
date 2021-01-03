<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCompaniesTable extends Migration
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
            'owner_id' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'null'          => true                
            ],
            'company_name' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,                                
            ],
            'cnpj' => [
                'type'          => 'VARCHAR',
                'constraint'    => 20,
                'unique'        => true                
            ],
            'state_registration' => [
                'type'          => 'VARCHAR',
                'constraint'    => 20,                
            ],
            'opening_date' => [
                'type'          => 'DATE',                               
            ],
            'site' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,                
            ],
            'email' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,
                'unique'        => true,                
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
        $this->forge->createTable('companies', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('companies');
    }
}