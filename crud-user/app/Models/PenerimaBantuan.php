<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaBantuan extends Model
{
    use HasFactory;

    protected $fillable = ['penerima_manfaat_id', 'bantuan_id', 'tanggal_terima'];

    public function penerimaManfaat()
    {
        return $this->belongsTo(PenerimaManfaat::class);
    }

    public function bantuan()
    {
        return $this->belongsTo(Bantuan::class);
    }
}
