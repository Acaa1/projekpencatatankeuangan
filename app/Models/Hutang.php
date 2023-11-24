<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hutang extends Model
{
    use HasFactory;

    protected $table ='Hutang';
    protected $fillable = [
        'nama'=> 'required',
        'jumlah'=> 'required',
        'catatan'=> 'required',
        'tgl_hutang'=> 'required',
        'tgl_jthtempo'=> 'required',
    ];
}
