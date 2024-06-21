<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('jabatans')->insert([
            'nama_karyawan' => 'Suratmo',
            'jabatan' => 'Staff',
            'alamat' => 'durensari',
            'umur' => '20',
            'status' => 'Bekerja',
            ]);
        
        DB::table('jabatans')->insert([
            'nama_karyawan' => 'Joyo',
            'jabatan' => 'Manager',
            'alamat' => 'jl.SekopSekop',
            'umur' => '30',
            'status' => 'Libur',
            ]);

    }
}
