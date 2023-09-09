<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class imagenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('imagenes')->insert([
            [
                'url_imagen' => 'https://ejemplo.com/imagen.jpg',
                'articulo_id' => 1
            ],
        ]);    
    }
}
