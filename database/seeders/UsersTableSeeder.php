<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => ' Roronoa Zoro ',
            'email' => 'zoro@jerami.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'role' => 'KARYAWAN',
            ]);

        DB::table('users')->insert([
            'name' => 'Nami',
            'email' => 'nami@jerami.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'role' => 'KARYAWAN',
            ]);

        DB::table('users')->insert([
            'name' => 'Vinsmoke Sanji',
            'email' => 'sanji@jerami.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'role' => 'KARYAWAN',
            ]);

        DB::table('users')->insert([
            'name' => 'Nico Robin',
            'email' => 'nico@jerami.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'role' => 'KARYAWAN',
            ]);

        DB::table('users')->insert([
            'name' => 'Monkey D Luffy',
            'email' => 'luffy@jerami.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'role' => 'TOKO',
            ]);


        DB::table('users')->insert([
            'name' => 'administrator',
            'email' => 'administrator@jerami.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'role' => 'ADMIN',
            ]);




    }
}
