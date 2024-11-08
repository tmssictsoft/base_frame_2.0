<?php

namespace Database\Seeders;

use App\Models\School;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $users = [
            [
                'role_id'=>1,
                'name'=>'TMSS ICT LIMITED',
                'username'=>'tmssict',
                'email'=>'superadmin@gmail.com',
                'password'=>Hash::make('123456'),
            ],
        ];

        User::insert($users);
    }
}
