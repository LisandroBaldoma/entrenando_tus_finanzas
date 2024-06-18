<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Curso extends Model
{
    use HasFactory;

    public function videos() : HasMany
    {
        return $this->hasMany(CursosVideos::class, 'curso_id', 'id', );
    }
}
