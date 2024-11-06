<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisError extends Model
{
    protected $table = 'jenis_errors';
    protected $fillable = [
        'nama_jenis',
    ];
}
