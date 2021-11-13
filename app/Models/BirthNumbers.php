<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BirthNumbers extends Model
{
    protected $table = 'birthnumbers';
    protected $guarded = [''];
    public function clients()
    {
        return $this->hasMany(ClientsController::class);
    }

    
}