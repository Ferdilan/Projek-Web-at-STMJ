<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Du extends Model
{
    use HasFactory;
    protected $fillable = [
        'ansuran',
        'tgl_bayar',
        'jml',
    ];
}
