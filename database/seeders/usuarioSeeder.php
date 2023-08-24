<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                'nombre' => 'Jose Dorance Dominguez Velez',
                'correo_electronico' => 'jose@gmail.com',
                'password' => Hash::make ('J197355*'),
                'rol' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Michell Tatiana Alonso Largo',
                'correo_electronico' => 'michell@gmail.com',
                'password' => Hash::make ('M197355*'),
                'rol' => 'periodista',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Paola Andrea Dominguez Velez',
                'correo_electronico' => 'paola@gmail.com',
                'password' => Hash::make ('P197355*'),
                'rol' => 'editor',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Carlos Mario Galvis Rosas',
                'correo_electronico' => 'carlos@gmail.com',
                'password' => Hash::make ('C197355*'),
                'rol' => 'usuario',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Jhon Edinson Lopez Marulanda',
                'correo_electronico' => 'jhon@gmail.com',
                'password' => Hash::make ('J197355*'),
                'rol' => 'usuario',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Daniel Alexander Velez Posada',
                'correo_electronico' => 'daniel@gmail.com',
                'password' => Hash::make ('D197355*'),
                'rol' => 'usuario',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
