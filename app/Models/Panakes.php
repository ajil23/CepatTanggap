<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panakes extends Model
{
    use HasFactory;
    protected $table = "panakes";
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'kep', 'lat', 'lng', 'tanggal', 'users_id'];

    public function users(){
        return $this->belongsTo(User::class,'users_id');
    }
}
