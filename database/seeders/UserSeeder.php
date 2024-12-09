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
                'tabela' => json_encode([
                    ['', 'Sistema de Lubrificação automartica', 'Sistema de Refrigeração', 'Lubrificador do Sistema Pneumático'],
                    ['Tipo de óleo', '	ISO VG 68 DIN 51502 CG-LP', 'Fluido com Minimo de 60% de Oleo Mineral', 'ISO VG 10 DIN 51524 CLP-HLP'],
                    ['Ajuste do Sistema', '2 cc/injeção', '	------', '	1 gota/5 ativações'],
                    ['Periodo de Abastecimento! Substituição', '72 horas (max.)', 'Conforme necessário', 'Verificação Semanal'],
                    ['Limpeza do Reservatório', 'Reservatório a Cada 12 Meses', 'Mensal', 'a Cada 6 meses']
                ]),
                'manual' => null
            ],
            [
                'nome' => 'Bomba ITAP',
                'imagem' => '/storage/img/ITAP.png',
                'ultima_manutencao' => '2024-09-15',
                'tabela' => json_encode([
                    ['Fabricante', 'ATÉ 3000 rpm'],
                    ['CASTROL', 'HYSPIN - 68'],
                    ['ATLANTIC', 'EUREKA - 68'],
                    ['ESSO', 'ÓLEO PARA TURBINA - 68'],
                    ['MOBIL OIL', 'DTE - 26'],
                    ['IPIRANGA', 'IPTUR AW - 68',],
                    ['PETROBRÁS	', 'MARBRAX TR - 68'],
                    ['SHELL', 'TELLUS - 68'],
                    ['TEXACO', 'REGAL R & O - 68']
                ]),
                'manual'=>'Manual_ITAP-INI_PT_REV_01.pdf'
            ],
           
        ]);
    }
}