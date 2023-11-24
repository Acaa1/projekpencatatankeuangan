<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RencanaBudget extends Model
{
    use HasFactory;
    protected $table ='Rencana_budget';
    protected $fillable = [
        'nama',
        'jumlah',
        'event',
        'kategori',
    ];
}
