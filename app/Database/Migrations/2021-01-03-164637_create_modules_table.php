<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateModulesTable extends Migration
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
            'module_name' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,                                
            ],
            'module_path' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,                                
            ],
            'module_icon' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100                                
            ],            
        ];
        $this->forge->addField($fields);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('modules', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('modules');
    }
}