<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bejegyzesek extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'bejegyzesek';
    protected $fillable = [
        'tevekenyseg_id',
        'osztaly_id',
        'allapot'
    ];

    public function tevekenyseg()
    {
        return $this->belongsTo(Tevekenysegek::class, 'tevekenyseg_id');
    }



}
