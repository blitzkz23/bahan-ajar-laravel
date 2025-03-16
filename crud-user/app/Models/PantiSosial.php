<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PantiSosial extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'alamat', 'kontak'];

    public function penerimaManfaat()
    {
        return $this->hasMany(PenerimaManfaat::class);
    }
}
