<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanaDarurat extends Model
{
    use HasFactory;
     
    protected $table ='Dana_Darurat';
    protected $fillable = [
        'nama'=> 'required',
        'catatan'=> 'required',
        'jumlah'=> 'required',
        'tanggal'=> 'required',
    ];
}
