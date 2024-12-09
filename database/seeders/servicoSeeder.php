<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class servicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('servicos')->insert([       
            [
                'maquina_id' => '1',
                'descricao' => 'Troca de óleo Sistema de lubrificação',
            
            ],
            [
                'maquina_id' => '1',
                'descricao' => 'Troca de óleo sistema de refrigeração',
            ],
            [
                'maquina_id' => '1',
                'descricao' => 'Troca de óleo sistema pneumatico',
            ],
            [
                'maquina_id' => '2',
                'descricao' => 'Troca de óleo',
            ],
            [
                'maquina_id' => '2',
                'descricao' => 'Utilização',
            ],
            
            
            


        ]);
    }
}
