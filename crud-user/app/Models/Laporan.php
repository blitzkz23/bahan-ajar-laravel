<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = ['penerima_manfaat_id', 'isi_laporan'];

    public function penerimaManfaat()
    {
        return $this->belongsTo(PenerimaManfaat::class);
    }
}
