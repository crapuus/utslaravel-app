<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models;
use App\Models\Jabatan;

class Divisi extends Model
{

    use HasFactory;
    protected $table = 'divisis';
    protected $fillable = [
        'jabatan_id',
        'nama_divisi',
        'ruang',
        'gedung',
        'nomor_ruang',
    ];

    public function jabatan(){
        return $this->belongsTo(Jabatan::class,'jabatan_id','id');
    }
}
