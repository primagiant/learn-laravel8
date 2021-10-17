<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'tb_mahasiswa';
    protected $guarded = [];

    public function angkatan()
    {
        return $this->hasOne('Angkatan', 'angkatan_id', 'id');
    }
}
