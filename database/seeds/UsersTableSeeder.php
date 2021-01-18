<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => "Administrator",
        	'email' => 'admin@example.com',
        	'password' => bcrypt('admin'),
        	'is_admin' => 1,
        ]);
    }
}
