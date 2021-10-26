<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKegiatan extends Model
{
    use HasFactory;
    protected $table = 'tb_jenis_kegiatan';
    protected $guarded = [];

    public function ketegori_kegiatan()
    {
        return $this->belongsTo(KategoriKegiatan::class, 'kategori_kegiatan_id', 'id');
    }
}
