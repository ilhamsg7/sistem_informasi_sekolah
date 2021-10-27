<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = "siswas";
    protected $fillable = [
        'nama',
        'nisn',
        'no_hp',
        'alamat',
        'nilai',
    ];
    use HasFactory;


}
