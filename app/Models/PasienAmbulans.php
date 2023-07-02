<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasienAmbulans extends Model
{
    use HasFactory;
    protected $table = 'pambulans';
    protected $primaryKey = 'id';

    protected $fillable =[
        'namapasien',
        'lokasi',
        'tanggal',
    ];
}
