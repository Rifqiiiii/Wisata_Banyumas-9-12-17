<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'notelepon'
    ];
    public function kontak():BelongsTo
    {
        return $this->belongsTo(kontak::class);
    }

}