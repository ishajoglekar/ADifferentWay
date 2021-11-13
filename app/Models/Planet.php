<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;

    public function zodiacs()
    {
        return $this->hasMany(ZodiacController::class);
    }
}
