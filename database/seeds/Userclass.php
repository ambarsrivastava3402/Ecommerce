<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Userclass extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
         
        'name' => 'peter parker',
        'email' => 'peterparkor@gmail.com',
        'password' => Hash::make('12345')


        ]);
    }
}
