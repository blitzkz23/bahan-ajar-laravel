<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaManfaat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 
        'nik', 
        'alamat', 
        'panti_id',
        'tanggal_masuk'
    ];

    public function pantiSosial()
    {
        return $this->belongsTo(PantiSosial::class, 'panti_id', 'id');
    }
}
