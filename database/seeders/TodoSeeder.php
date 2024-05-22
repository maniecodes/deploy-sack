<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('todos')->insert([
            ['title' => 'First Todo', 'description' => 'Description of first todo', 'completed' => false],
            ['title' => 'Second Todo', 'description' => 'Description of second todo', 'completed' => true],
        ]);
    }
}
