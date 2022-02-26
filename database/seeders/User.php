<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => "flysquare",
            'email' => "umutkonurinso@gmail.com",
            'password' => md5('asd'),
        ]);
    }
}
