<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MAplikasi extends Model
{
    protected $table = 'm_aplikasis';
    protected $fillable = [
        'nama_aplikasi',
        'deskripsi_aplikasi',
    ];
}
