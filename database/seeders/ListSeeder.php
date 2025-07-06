<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('list')->insert([
            'title' => Str::random(10),
            'description' => Str::random(10),
            'created_at' => now(),
        ]);
    }
}
