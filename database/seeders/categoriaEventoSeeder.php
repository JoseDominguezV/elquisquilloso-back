<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class categoriaEventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoriaEvento = [
            'Entrenenimiento',
            'Deportes',
            'Arte y cultura',
            'Gastronomia',
            'Politica'
        ];

        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('categoria_evento')->insert([
                'evento_id' => $faker->uuid, // Debes ajustar esto para que sea un UUID válido
                'categoria_id' => $faker->numberBetween(1, 10), // Ajusta este rango según tus categorías reales
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
