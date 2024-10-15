<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContractsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contracts = [
            'Contrato a Término Indefinido',
            'Contrato a Término Fijo',
            'Contrato por Obra o Labor',
            'Contrato de Aprendizaje',
            'Contrato por Temporada',
            'Contrato a Tiempo Parcial',
            'Contrato por Teletrabajo',
            'Contrato de Prestación de Servicios',
            'Contrato de Trabajo a Domicilio',
            'Contrato de Reemplazo por Licencia de Maternidad o Paternidad',
            'Contrato de Trabajo para Extranjeros',
            'Contrato de Trabajo para Menores de Edad',
            'Contrato de Trabajo para Personas con Discapacidad',
            'Contrato de Temporada Turística'
        ];

        foreach ($contracts as $contract) {
            DB::table('contracts')->insert(['contract_type' => $contract]);
        }
    }
}
