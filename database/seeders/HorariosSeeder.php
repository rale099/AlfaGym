<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HorariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $diaSemana = [
            'Lunes',
            'Martes',
            'Miercoles',
            'Jueves',
            'Viernes',
            'Sabado',
            'Domingo',
        ];
        foreach ($diaSemana as $dia){
            DB::table('horarios')->insert([
                'dia_semana' => $dia,
                'desde' => '05:00:00',
                'hasta' => '21:00:00',
                'sucursal_id'=> '1',
            ]);
        }
    }
}
