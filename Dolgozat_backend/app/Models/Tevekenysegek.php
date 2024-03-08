<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tevekenysegek extends Model
{
    use HasFactory;
    protected $primaryKey = 'tevekenyseg_id';
    protected $table = 'tevekenyseg';
    protected $fillable = [
        'tevekenyseg_nev',
        'pontszam'
    ];
}
