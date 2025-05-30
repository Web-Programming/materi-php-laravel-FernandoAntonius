<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";

    protected $fillable = [
        'nama',
        'prodi_id',
        'tanggal_lahir',
        'tempat_lahir',
    ];

    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class);
    }
}
