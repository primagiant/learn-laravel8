<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembimbingAkademik extends Model
{
    use HasFactory;
    protected $table = 'tb_pa';
    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'pa_id', 'id');
    }
}
