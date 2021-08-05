<?php

namespace Database\Seeders;

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
        $this->call(CompaniesTableSeeder::class);
        $this->call(BranchesTableSeeder::class);
        $this->call(MainMenusTableSeeder::class);
        $this->call(SubMenusTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
