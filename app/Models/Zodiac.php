<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zodiac extends Model
{
    public function clients()
    {
        return $this->hasMany(ClientsController::class);
    }

    public function element()
    {
        return $this->belongsTo(Element::class);
    }

    public function birthnumber()
    {
        return $this->belongsTo(BirthNumbers::class);
    }
}
