<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        
       $users = [
        [
           'name'=>'Admin',
           'email'=>'admin@admin.com',
            'is_admin'=>'1',
           'password'=> 'testtesttest',
        ],
        [
           'name'=>'user',
           'email'=>'user@user.com',
            'is_admin'=>'0',
           'password'=> 'testtesttest',
        ],
        [
           'name'=>'abed',
           'email'=>'abed@abed.com',
            'is_admin'=>'0',
           'password'=> 'testtesttest',
        ],
        [
            'name'=>'david',
            'email'=>'david@david.com',
             'is_admin'=>'0',
            'password'=> 'testtesttest',
         ],
         [
            'name'=>'yara',
            'email'=>'yara@yara.com',
             'is_admin'=>'0',
            'password'=> 'testtesttest',
         ],
         [
            'name'=>'mira',
            'email'=>'mira@mira.com',
             'is_admin'=>'0',
            'password'=> 'testtesttest',
         ],
         [
            'name'=>'rony',
            'email'=>'rony@rony.com',
             'is_admin'=>'0',
            'password'=> 'testtesttest',
         ],
         [
            'name'=>'marcus',
            'email'=>'marcus@marcus.com',
             'is_admin'=>'0',
            'password'=> 'testtesttest',
         ],
         [
            'name'=>'alan',
            'email'=>'alan@alan.com',
             'is_admin'=>'0',
            'password'=> 'testtesttest',
         ],
         [
            'name'=>'fabio',
            'email'=>'fabio@fabio.com',
             'is_admin'=>'0',
            'password'=> 'testtesttest',
         ],
         [
            'name'=>'rewan',
            'email'=>'youssefrewan15@gmail.com',
             'is_admin'=>'0',
            'password'=> 'testtesttest',
         ],
    ];

    foreach ($users as $user) {
        $newUser =  User::create([
            'name' => $user['name'],
            'email' => $user['email'],
            'password' => Hash::make($user['password']),
            'is_admin' =>$user['is_admin'],
        ]);
       
    }

    }
}
