<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(ModuleSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ConfigurationTableSeeder::class);
    }
}
