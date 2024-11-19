<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 


class MaquinaOleoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('maquina_oleo')->insert([

       
            
            [
                'maquina_id' => '2',
                'oleo_id' => '1',
            ],

            [
                'maquina_id' => '2',
                'oleo_id' => '2',
            ],

            [
                'maquina_id' => '2',
                'oleo_id' => '3',
            ],

            [
                'maquina_id' => '2',
                'oleo_id' => '4',
            ],

            [
                'maquina_id' => '2',
                'oleo_id' => '5',
            ],

            [
                'maquina_id' => '2',
                'oleo_id' => '6',
            ],  

            [
                'maquina_id' => '2',
                'oleo_id' => '7',
            ],

            [
                'maquina_id' => '2',
                'oleo_id' => '8',
            ],

            [
                'maquina_id' => '1',
                'oleo_id' => '9',
            ],
        
        ]);
    }
}
