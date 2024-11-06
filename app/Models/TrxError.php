<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrxError extends Model
{
    protected $table = 'trx_errors';
    protected $fillable = [
        'aplikasi_id',
        'jenis_error_id',
        'solusi',
    ];
}
