<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	['name' => 'Smartphones','code' => 'mobiles', 'description' => ''],
        	['name' => 'PC Components','code' => 'pc_components', 'description' => ''],
        	['name' => 'Laptops','code' => 'laptops', 'description' => ''],
        ]);
    }
}
