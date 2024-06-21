<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

        protected $tables = 'karyawan';
        public $timestamps = true;
        public $fillable = ['nama', 'alamat' , 'gender','tanggal_lahir', 'pendidikan_terakhir' ];
        // protected $dates = ['tanggal_lahir'];

        // protected $casts = [
        //     'tanggal_lahir' => 'date:Y-m-d',
        // ];
}
