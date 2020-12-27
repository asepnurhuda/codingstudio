<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Smartphone'
        ]);

        DB::table('categories')->insert([
            'name' => 'Speaker'
        ]);

        DB::table('categories')->insert([
            'name' => 'TV'
        ]);

        DB::table('categories')->insert([
            'name' => 'AC'
        ]);

        DB::table('categories')->insert([
            'name' => 'Computer'
        ]);
    }
}
