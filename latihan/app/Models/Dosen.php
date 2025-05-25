<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dosen extends Model
{
    protected $table = "dosen";

    protected $fillable = [
        'nama',
        'prodi_id',
        'status_kerja',
        'tanggal_lahir',
        'tempat_lahir',
    ];

    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class);
    }
}
