<?php

use Illuminate\Database\Seeder;

class jobpostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_posts')->insert([
            [
                'jobprovider_id ' => 2,
                'post'  => 'intern',
                'salary' => 5000,
                'experience' => 0,
                'no_of_vacant_position' => 2,
                'qualification' => 'BIT',
                'heading' => 'Laravel Intern'
            ],
            [
                'jobprovider_id ' => 2,
                'post'  => 'senior develope',
                'salary' => 100000,
                'experience' => 5,
                'no_of_vacant_position' => 1,
                'qualification' => 'MIT',
                'heading' => 'full Stack Laravel developer'
            ]
        ]);
    }
}
