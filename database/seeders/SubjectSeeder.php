<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classes = [
            [
                'name' => 'Physics',
                'subject_id' => 'PHY101',
                'credits' => 3
            ],
            [
                'name' => 'Chemistry',
                'subject_id' => 'CHM101',
                'credits' => 3
            ],
            [
                'name' => 'Intro to Computer Science',
                'subject_id' => 'CS101',
                'credits' => 3
            ],
            [
                'name' => 'Calculus I',
                'subject_id' => 'MA241',
                'credits' => 3
            ],
            [
                'name' => 'Calculus II',
                'subject_id' => 'MA242',
                'credits' => 3
            ],
            [
                'name' => 'History of the World',
                'subject_id' => 'HU402',
                'credits' => 2
            ],
            [
                'name' => 'Psychology',
                'subject_id' => 'HU305',
                'credits' => 2
            ],
            [
                'name' => 'Sociology',
                'subject_id' => 'HU306',
                'credits' => 2
            ],
        ];

        foreach ($classes as $class) {
            Subject::create($class);
        }
    }
}
