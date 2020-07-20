<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $color = ['red', 'green', 'purple'];
        for ($i=0; $i < 20; $i++) { 
            DB::table('categories')->insert([
                'name' => Str::random(10),
                'color' => $color[rand(0, 2)],
                'description' => Hash::make('password'),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
