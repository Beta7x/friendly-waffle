<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sub extends Model
{
    use HasFactory;

    public function kriteria(): BelongsTo
    {
        return $this->belongsTo(Kriteria::class, 'kode_id', 'kode');
    }
}
