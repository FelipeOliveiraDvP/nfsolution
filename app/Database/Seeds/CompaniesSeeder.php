<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    public function run()
    {        
        $data = [
            [
                'owner_id'          => null,
                'company_name'      => 'Cláudia e Victor Marcenaria Ltda',
                'cnpj'              => $this->cleanMask('99.467.215/0001-84'),
                'state_registration'=> $this->cleanMask('163.984.611.114'),
                'opening_date'      => '2016-05-16',
                'site'              => 'www.claudiaevictormarcenarialtda.com.br',
                'email'             => 'vendas@claudiaevictormarcenarialtda.com.br',
                'zip_code'          => $this->cleanMask('02535-010'),
                'address_1'         => 'Rua Artur de Oliveira',
                'address_2'         => null,
                'number'            => '466',
                'neighborhood'      => 'Parque Peruche',
                'city'              => 'São Paulo',
                'state'             => 'SP',
                'phone_1'           => $this->cleanMask('(11) 2913-6783'),
                'phone_2'           => $this->cleanMask('(11) 99839-4025')
            ],
            [
                'owner_id'          => null,
                'company_name'      => 'Luana e Ricardo Buffet ME',
                'cnpj'              => $this->cleanMask('76.026.672/0001-38'),
                'state_registration'=> $this->cleanMask('961.033.626.242'),
                'opening_date'      => '2016-09-01',
                'site'              => 'www.luanaericardobuffetme.com.br',
                'email'             => 'fiscal@luanaericardobuffetme.com.br',
                'zip_code'          => $this->cleanMask('03814-000'),
                'address_1'         => 'Rua Sampei Sato',
                'address_2'         => null,
                'number'            => '810',
                'neighborhood'      => 'Jardim Matarazzo',
                'city'              => 'São Paulo',
                'state'             => 'SP',
                'phone_1'           => $this->cleanMask('(11) 2846-3955'),
                'phone_2'           => $this->cleanMask('(11) 98311-5772')
            ],
            [
                'owner_id'          => null,
                'company_name'      => 'Lavínia e Eloá Entulhos Ltda',
                'cnpj'              => $this->cleanMask('66.914.777/0001-70'),
                'state_registration'=> $this->cleanMask('650.417.522.879'),
                'opening_date'      => '2016-03-22',
                'site'              => 'www.laviniaeeloaentulhosltda.com.br',
                'email'             => 'presidencia@laviniaeeloaentulhosltda.com.br',
                'zip_code'          => $this->cleanMask('09771-360'),
                'address_1'         => 'Rua Bartolomeu Dias',
                'address_2'         => null,
                'number'            => '283',
                'neighborhood'      => 'Nova Petrópolis',
                'city'              => 'São Bernardo do Campo',
                'state'             => 'SP',
                'phone_1'           => $this->cleanMask('(11) 3632-9649'),
                'phone_2'           => $this->cleanMask('(11) 99158-2069')
            ],
            [
                'owner_id'          => null,
                'company_name'      => 'Isabelly e Roberto Locações de Automóveis Ltda',
                'cnpj'              => $this->cleanMask('42.033.677/0001-76'),
                'state_registration'=> $this->cleanMask('899.360.544.800'),
                'opening_date'      => '2016-09-11',
                'site'              => 'www.isabellyerobertolocacoesdeautomoveisltda.com.br',
                'email'             => 'sistema@isabellyerobertolocacoesdeautomoveisltda.com.br',
                'zip_code'          => $this->cleanMask('12913-028'),
                'address_1'         => 'Rua Sicília',
                'address_2'         => null,
                'number'            => '903',
                'neighborhood'      => 'Residencial das Ilhas',
                'city'              => 'Bragança Paulista',
                'state'             => 'SP',
                'phone_1'           => $this->cleanMask('(11) 3659-3870'),
                'phone_2'           => $this->cleanMask('(11) 98321-6684')
            ],
            [
                'owner_id'          => null,
                'company_name'      => 'Andrea e André Alimentos Ltda',
                'cnpj'              => $this->cleanMask('60.197.535/0001-26'),
                'state_registration'=> $this->cleanMask('968.509.069.974'),
                'opening_date'      => '2016-04-09',
                'site'              => 'www.andreaeandrealimentosltda.com.br',
                'email'             => 'suporte@andreaeandrealimentosltda.com.br',
                'zip_code'          => $this->cleanMask('04848-150'),
                'address_1'         => 'Rua José Firmino Tiacci',
                'address_2'         => null,
                'number'            => '546',
                'neighborhood'      => 'Jardim Progresso',
                'city'              => 'São Paulo',
                'state'             => 'SP',
                'phone_1'           => $this->cleanMask('(11) 3516-3180'),
                'phone_2'           => $this->cleanMask('(11) 99508-3737')
            ],
        ];

        $this->db->table('companies')->insertBatch($data);
    }

    private function cleanMask($value)
    {        
        return trim(preg_replace('/[^0-9]+/', '', $value));
    }
}