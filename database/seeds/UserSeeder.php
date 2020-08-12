<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'role_id' => 1,
                'phone' => '9815789485',
                'address' => 'ktm',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'ram',
                'role_id' => 2,
                'phone' => '9815787585',
                'address' => 'ktm',
                'email' => 'ram@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'shyam',
                'role_id' => 3,
                'phone' => '9818887585',
                'address' => 'ktm',
                'email' => 'shyam@gmail.com',
                'password' => Hash::make('12345678'),
                ]
        ]);
    }
}
