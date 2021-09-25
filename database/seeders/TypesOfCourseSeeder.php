<?php

namespace Database\Seeders;

Use App\Models\TypesOfCourse;
use Illuminate\Database\Seeder;

class TypesOfCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        TypesOfCourse::create([
            'id'=>1002,
        'course_type'=>'Modern Languages',
       'desc'=>' Learning to speak different languages'
        ]);

        TypesOfCourse::create([
            'id'=>1003,
        'course_type'=>'Sciences',
       'desc'=>' science subjects'
        ]);
        
        TypesOfCourse::create([
        'id'=>1005,
        'course_type'=>'Arts',
       'desc'=> 'Modes of expression that use skill or imagination in the creation  '
        ]);

        TypesOfCourse::create([
        'id'=>1006,
        'course_type'=>'Social Studies/History',
       'desc'=> 'study of past and present way of life'
        ]);
    }
}
