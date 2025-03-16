<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaManfaat extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'nik', 'alamat', 'panti_id'];

    public function panti()
    {
        return $this->belongsTo(Panti::class);
    }
}
