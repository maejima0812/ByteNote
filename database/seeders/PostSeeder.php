<?php

namespace Database\Seeders;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
                'name' => 'ローソン',
                'categories' => '小売業',
         ]);
        DB::table('stores')->insert([
                'name' => 'セブンイレブン',
                'categories' => '小売業',
         ]);
        DB::table('stores')->insert([
                'name' => 'ファミリーマート',
                'categories' => '小売業',
         ]);
    }
}
