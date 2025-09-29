<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvitadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('invitadosSalma')->insert([
            [
                'nombre' => 'Juan',
                'apellido' => 'Pérez',
                'telefono' => '5551234567',
                //'invitados_extra' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'María',
                'apellido' => 'López',
                'telefono' => '5559876543',
                //'invitados_extra' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
