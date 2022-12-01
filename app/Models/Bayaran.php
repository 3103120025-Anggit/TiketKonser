<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayaran extends Model
{
    use HasFactory;

    protected $fillable =[
        'jenis_konser','jumlah_tiket','harga','date_of_konser'
    ];

}