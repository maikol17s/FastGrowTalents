<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SalaryRangesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ranges = [
            'Less than $700,000',
            'More than $700,000',
            'More than $1,000,000',
            'More than $1,500,000',
            'More than $2,000,000',
            'More than $2,500,000',
            'More than $3,000,000',
            'More than $3,500,000',
            'More than $4,000,000',
            'More than $4,500,000',
            'More than $5,500,000',
            'More than $6,000,000'
        ];

        foreach ($ranges as $range) {
            DB::table('salary_ranges')->insert(['salary_range' => $range]);
        }
    }
}
