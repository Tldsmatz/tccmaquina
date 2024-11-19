<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run() 
    {
        DB::table('maquinas')->insert([
            [
                'nome' => 'Torno CNC Hardinge GS 200',
                'imagem' => '/storage/img/gs200-torno.jpg',
                'ultima_manutencao' => '2024-09-01',
            ],
            [
                'nome' => 'Bomba ITAP',
                'imagem' => '/storage/img/ITAP.png',
                'ultima_manutencao' => '2024-09-15',
            ],
           
        ]);
    }
}