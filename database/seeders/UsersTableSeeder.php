<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaultUser = new User();

        $defaultUser->name = 'Admin';
        $defaultUser->last_name = 'Default';
        $defaultUser->telephone = '00000000';
        $defaultUser->email = 'admin@gmail.com';
        $defaultUser->password = Hash::make('Admin2023-24');
        $defaultUser->document_type = 'CC';
        $defaultUser->document_number = '000000000';
        $defaultUser->role_id = 1;

        $defaultUser->save();

        $ronaldUser = new User();

        $ronaldUser->name = 'RONALD';
        $ronaldUser->last_name = 'PUERTO';
        $ronaldUser->telephone = '3128894810';
        $ronaldUser->email = 'ronald@gmail.com';
        $ronaldUser->password = Hash::make('Ronald123');
        $ronaldUser->document_type = 'CC';
        $ronaldUser->document_number = '1019762940';
        $ronaldUser->role_id = 2;

        $ronaldUser->save();

        $valeUser = new User();

        $valeUser->name = 'VALENTINA';
        $valeUser->last_name = 'AVILITA';
        $valeUser->telephone = '3113009261';
        $valeUser->email = 'vale@gmail.com';
        $valeUser->password = Hash::make('Avilita123');
        $valeUser->document_type = 'CC';
        $valeUser->document_number = '1140914332';
        $valeUser->role_id = 3;

        $valeUser->save();
    }
}
