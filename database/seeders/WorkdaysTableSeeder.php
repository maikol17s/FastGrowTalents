<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WorkdaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $workdays = [
            'Jornada Completa',
            'Jornada Reducida',
            'Jornada Acumulada',
            'Jornada Nocturna',
            'Jornada Mixta',
            'Jornada Continua',
            'Jornada por Turnos',
            'Jornada Flexible'
        ];

        foreach ($workdays as $workday) {
            DB::table('workdays')->insert(['workday' => $workday]);
        }  
    }
}
