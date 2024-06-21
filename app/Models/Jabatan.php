<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Jabatan extends Model
{

    use HasFactory;
    
    protected $table = 'jabatans';
    protected $fillable = [
        'nama_karyawan',
        'jabatan',
        'alamat',
        'umur',
        'status',
        'nohp',
    ];

    public function divisis(){
        return $this->hasMany(Divisi::class,'jabatan_id', 'id');
    }
    public $timestamps = true;
    

}
