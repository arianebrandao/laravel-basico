<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'  => 'Ariane Brandão',
            'email' =>  'ariane_mad@hotmail.com',
            'password' => bcrypt('teste')
        ]);
    }
}
