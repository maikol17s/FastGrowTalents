<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'role_name' => 'Administrator',
                'description' => 'The administrator is the only role that can manage the entire system and assign roles.'
            ],
            [
                'role_name' => 'Recruiter',
                'description' => 'The recruiter registers the request for a new position, to allow vacancies to take into account the requirements requested by each of the applications.'
            ],
            [
                'role_name' => 'Candidate',
                'description' => 'The candidate can view the application offers, upload the data and the resume according to the application required, and check the status in which they are located.'
            ],
        ];

        DB::table('roles')->insert($roles);
    }
}
