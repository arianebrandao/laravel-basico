<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        
        /*
        App\User::create([
            'name'  => 'Ariane Brandão',
            'email' =>  'ariane_mad@hotmail.com',
            'password' => bcrypt('teste')
        ]);
         * */
    }
}
