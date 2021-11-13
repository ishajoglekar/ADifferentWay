<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    protected $guarded = [''];
    public function clients()
    {
        return $this->hasMany(ClientsController::class);
    }

    public function zodiacs()
    {
        return $this->hasMany(ZodiacController::class);
    }
}
