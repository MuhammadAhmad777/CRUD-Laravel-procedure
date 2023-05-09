<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('students')->insert([
            [
                'id' => '1',
                'rollNumber' => '12345',
                'cgpa' => 3.5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '2',
                'rollNumber' => '23456',
                'cgpa' => 3.2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '3',
                'rollNumber' => '34567',
                'cgpa' => 3.8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '4',
                'rollNumber' => '45678',
                'cgpa' => 3.4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
