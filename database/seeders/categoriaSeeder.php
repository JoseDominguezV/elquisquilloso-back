<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoria = [
            'Cultura y Entretenimiento',
            'Deportes',
            'Opinión',
            'Anuncios Clasificados',
            'Salud y Bienestar',
            'Educación',
            'Negocios Locales'
        ];

        foreach (range(1, 7) as $index){
            DB::table('categorias')->insert([
                'nombre' => $categoria[$index -1],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
