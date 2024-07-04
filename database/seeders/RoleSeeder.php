<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('roles')->insert(
           [ 
            ['name' => "President Of Indonesia Branch Office"],
            ['name' => "Deputy General Manager"],
            ['name' => "Accounting Assistant"],
            ['name' => "Business Assistant"],
            ['name' => "Content Creator"],
            ['name' => "IT Developer"],
            ['name' => "IT Support"],
            ['name' => "Video Grapher & Editor"]
           ]
        );
    }
}
