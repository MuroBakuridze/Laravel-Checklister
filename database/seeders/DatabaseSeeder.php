<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\PagesSeeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\ChecklistGroupsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(PagesSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ChecklistGroupsTableSeeder::class);
    }
}
