<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'name' => 'create post',
            ],
            [
                'name' => 'edit post',
            ],
            [
                'name' => 'Approve post',
            ],
            [
                'name' => 'delete user',
            ],
            [
                'name' => 'delete post',
                ]
        ]);
    }
}
