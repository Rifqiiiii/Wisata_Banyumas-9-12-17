<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
<<<<<<< HEAD
=======

    protected $fillable = [
        'username',
        'password'
    ];
    
    public function pengguna():BelongsTo
    {
        return $this->belongsTo(pengguna::class);
    }
    
>>>>>>> 1826384da3d10f3738ecd556cdf1d6aa715084c9
}
