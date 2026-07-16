<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
            'name'=>'Placidusax',
            'email'=>'sax@gmail.com',
            'password'=>Hash::make('1234'),
            'role'=>'admin',
            ],
        [
            'name'=>'dathoang',
            'email'=>'dh@gmail.com',
            'password'=>Hash::make('1234'),
            'role'=>'user',
        ],
        [
            'name'=>'nguyen a',
            'email'=>'anguyen@gmail.com',
            'password'=>Hash::make('1234'),
            'role'=>'staff',
        ],
        ]
    );
    }
}
