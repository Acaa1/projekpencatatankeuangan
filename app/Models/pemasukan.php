<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemasukan extends Model
{
    use HasFactory;
    protected $table ='Pemasukan';
    protected $fillable = [
        'nama_pemasukan', 
        'jumlah',
        'catatan',
        'tanggal',
        'kategori',
    ];
}
