<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_mobil extends Model
{
    use HasFactory;
    protected $table = 'mobil';
    public $timestamps = false;

    protected $fillable = [
        'id_mobil', 'merk' ,'tipe', 'plat', 'stat' ,'gambar'
    ];
}
