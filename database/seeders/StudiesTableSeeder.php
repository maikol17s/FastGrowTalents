<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $studies = [
            'Preescolar',
            'Básica primaria',
            'Básica secundaria',
            'Educación media',
            'Técnico',
            'Tecnólogo',
            'Pregrado',
            'Posgrado'
        ];

        foreach ($studies as $study) {
            DB::table('studies')->insert(['academic_level' => $study]);
        }
    }
}
