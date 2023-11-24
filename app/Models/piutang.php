<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class piutang extends Model
{
    use HasFactory;
    protected $table ='Piutang';
    protected $fillable = [
        'nama',
        'jumlah',
        'catatan',
        'tgl_Piutang',
        'tgl_jthtempo',
    ];
}
