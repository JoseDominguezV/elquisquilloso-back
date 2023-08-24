<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class eventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) { // Cambia el rango (1, 10) según la cantidad de registros que desees crear.
            DB::table('eventos')->insert([
                'id' => $faker->uuid,
                'titulo' => $faker->sentence,
                'descripcion' => $faker->paragraph,
                'organizador_id' => $faker->numberBetween(1, 5), // Ajusta este rango según tus usuarios reales
                'fecha_inicio' => $faker->date,
                'fecha_fin' => $faker->date,
                'hora_inicio' => $faker->time,
                'hora_fin' => $faker->time,
                'contacto' => $faker->email,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
