<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $arr = [];

        for($i=0; $i<10; $i++){
            array_push($arr, [
                "name" => "item" . $i,
                "is_drop" => false
            ]);
        }

        DB::table('tests')->insert($arr);
    }
}
