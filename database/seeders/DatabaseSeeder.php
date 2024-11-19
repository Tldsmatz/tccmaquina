<?php

namespace Database\Seeders;

use App\Models\Maquina;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            MaquinaOleoSeeder::class,
            OleoSeeder::class,
        ]);
    }
}
