<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DefineCompaniesOwner extends Seeder
{
    public function run()
    {        
        $this->db->table('companies')->set('owner_id', '2')->where('id', 1)->update();
        $this->db->table('companies')->set('owner_id', '4')->where('id', 2)->update();
        $this->db->table('companies')->set('owner_id', '6')->where('id', 3)->update();
        $this->db->table('companies')->set('owner_id', '8')->where('id', 4)->update();
        $this->db->table('companies')->set('owner_id', '10')->where('id', 5)->update();
    }
}