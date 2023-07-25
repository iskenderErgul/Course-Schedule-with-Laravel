<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('course')->insert(
            [
                [
                    'course_title' => 'PHP',
                    'course_content' => 'php kurs içerigi',
                    'course_must' => 1
                ],
                [
                    'course_title' => 'Bootstrao',
                    'course_content' => '   Bootstrap kurs içerigi',
                    'course_must' => 2
                ],
                [
                    'course_title' => 'Javascript',
                    'course_content' => 'Javascript kurs içerigi',
                    'course_must' => 3
                ],
                [
                    'course_title' => 'Laravel 10 ',
                    'course_content' => 'Laravel kurs içerigi',
                    'course_must' => 4
                ]
            ]
        );
    }
}
