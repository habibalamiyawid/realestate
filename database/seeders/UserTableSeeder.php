<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            //admin
            [
                'name'=>'Admin',
                'username'=>'admin',
                'email'=>'admin@example.com',
                'password'=>Hash::make('111'),
                'role'=>'admin',
                'status'=>'active',
            ],

            //agent

            [
                'name'=>'Agent',
                'username'=>'agent',
                'email'=>'agent@example.com',
                'password'=>Hash::make('111'),
                'role'=>'agent',
                'status'=>'active',
            ],

            //user

            [
                'name'=>'User',
                'username'=>'user',
                'email'=>'user@example.com',
                'password'=>Hash::make('111'),
                'role'=>'user',
                'status'=>'active',
            ],
        ]);
    }
}
