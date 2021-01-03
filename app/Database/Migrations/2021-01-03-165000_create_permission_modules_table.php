<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePermissionModulesTable extends Migration
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
            'module_id' => [
                'type'          => 'INT',
                'constraint'    => 11,                                
            ],
            'company_id' => [
                'type'          => 'VARCHAR',
                'constraint'    => 11,                                
            ],            
        ];
        $this->forge->addField($fields);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('permission_modules', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('permission_modules');
    }
}