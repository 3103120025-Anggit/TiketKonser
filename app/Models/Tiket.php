<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    protected $fillable =[
        'nama','alamat','jenis_konser','set_tempatduduk','harga','date_of_konser'
    ];

}

