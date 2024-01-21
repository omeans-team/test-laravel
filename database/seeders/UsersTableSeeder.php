<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->insert([
            'name' => 'Aris Hadisopiyan',
            'email' => 'aris.hadisopiyan@gmail.com',
            'password' => Hash::make('24121993'),
            'posisi' => 'Website Programmer',
        ]);
        \DB::table('categories')->insert([
            'name' => 'Alat Olahraga',
        ]);
        \DB::table('categories')->insert([
            'name' => 'Alat Musik',
        ]);
    }
}
