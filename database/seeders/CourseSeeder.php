<?php

namespace Database\Seeders;


use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Course::create([
            'id' =>2011,
            'course_name'=>'Spanish',
            'course_type_id'=>1002,
        ]);

        Course::create([
            'id' => 3012,
            'course_name' => 'Biology',
            'course_type_id' => 1003,

        ]);

        Course::create([
            'id' =>6013,
            'course_name' => 'History',
            'course_type_id' => 1006,
        ]);

        Course::create([
            'id' => 5015,
            'course_name' => 'Drama',
            'course_type_id' => 1005,
        ]);

        Course::create([
            'id' => 3018,
            'course_name' => 'Geography',
            'course_type_id' => 1003,
        ]);

        Course::create([
            'id' => 3048,
            'course_name' => 'Chemistry',
            'course_type_id' => 1003,
        ]);

        Course::create([
            'id' => 6128,
            'course_name' => 'Economics',
            'course_type_id' => 1006,
        ]);
    }
}
