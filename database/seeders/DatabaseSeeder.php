<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\RolesTableSeeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\OccupationsTableSeeder;
use Database\Seeders\MunicipalitiesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MunicipalitiesTableSeeder::class);
        $this->call(OccupationsTableSeeder::class);
        $this->call(StudiesTableSeeder::class);
        $this->call(ContractsTableSeeder::class);
        $this->call(WorkdaysTableSeeder::class);
        $this->call(SalaryRangesTableSeeder::class);
        $this->call(SkillsTableSeeder::class);

        // FACTORIES

        User::factory()->count(20)->create();
    }
}
