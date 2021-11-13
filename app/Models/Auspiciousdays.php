<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auspiciousdays extends Model
{
    protected $guarded = [''];
    public function clients()
    {
        return $this->hasMany(ClientsController::class);
    }    
}
