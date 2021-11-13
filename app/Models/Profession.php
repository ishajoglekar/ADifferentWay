<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $guarded = [''];
    public function client()
    {
        return $this->hasMany(ClientsController::class);
    }

}
