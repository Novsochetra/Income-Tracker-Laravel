<?php

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
        // $this->call([IncomeSeeder::class, CategorySeeder::class]);
        $this->call(IncomeSeeder::class);
    }
}
