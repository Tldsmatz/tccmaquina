<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OleoSeeder extends Seeder
{
    public function run() 
    {
        DB::table('oleos')->insert([
            [
                'nome' => 'CASTROL',
                'tipo' => 'HYSPIN - 68',
            ],

            [
                'nome' => 'ATLANTIC',
                'tipo' => 'EUREKA - 68',
            ],

            [
                'nome' => 'ESSO',
                'tipo' => 'ÓLEO PARA TURBINA - 68',
            ],

            [
                'nome' => 'MOBIL OIL',
                'tipo' => 'DTE - 26',
            ],

            [
                'nome' => 'IPIRANGA',
                'tipo' => 'IPTUR AW - 68',
            ],
            
            [
                'nome' => 'PETROBRÁS',
                'tipo' => 'MARBRAX TR - 68',
            ],
            [
                'nome' => 'SHELL',
                'tipo' => 'TELLUS - 68',
            ],
            [
                'nome' => 'TEXACO',
                'tipo' => 'REGAL R & O - 68',
            ],





            [
                'nome' => 'ISO VG 68 DIN 51502 CG-LP',
                'tipo' => 'Fluido com Minimo de 60% de Oleo Mineral',
                
            ],
            
        ]);
    }
}