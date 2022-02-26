<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Quizzes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes')->insert([
            'title' => "En Çok Kullanılan 1000 İngilizce Kelime",
            'image' => ""
        ]);
        DB::table('quizzes')->insert([
            'title' => "En Çok Kullanılan 100 İngilizce Sıfat",
            'image' => ""
        ]);
        DB::table('quizzes')->insert([
            'title' => "En Çok Kullanılan 100 İngilizce Fiil",
            'image' => ""
        ]);
    }
}
