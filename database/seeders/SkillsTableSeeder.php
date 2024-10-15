<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            'Aprendizaje aplicado',
            'Análisis de control de calidad',
            'Análisis de necesidades',
            'Análisis de procesos',
            'Comunicación asertiva',
            'Creatividad',
            'Crítico pensamiento',
            'Designación de tecnología',
            'Escucha activa',
            'Ensamble',
            'Estrategias para el aprendizaje',
            'Evaluación y control de actividades',
            'Flexibilidad y adaptabilidad',
            'Gestión de recursos materiales',
            'Gestión del tiempo',
            'Instalación',
            'Interpersonal relaciones',
            'Liderazgo',
            'Lógica matemática',
            'Mantenimiento de equipos',
            'Manejo de imprevistos',
            'Ordenar las palabras',
            'Persuasión',
            'Pensamiento crítico',
            'Programación',
            'Proactividad',
            'Redacción de textos',
            'Relaciones interpersonales',
            'Reparación',
            'Resolución de problemas complejos',
            'Seguir instrucciones',
            'Selección de equipo',
            'Tecnología de diseño',
            'Transmisión de conocimiento',
            'Trabajo bajo presión',
            'Trabajo en equipo',
            'Vigilancia de las operaciones'
        ];

        foreach ($skills as $skill) {
            DB::table('skills')->insert(['skill_name' => $skill]);
        }
    }
}
