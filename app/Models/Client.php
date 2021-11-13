<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];

    public function birthnumber()
    {
        return $this->belongsTo(BirthNumbers::class);
    }
    public function deities()
    {
        return $this->belongsTo(Deities::class);
    }

    public function elements()
    {
        return $this->belongsTo(Element::class);
    }
    
    public function friendlynumbers()
    {
        return $this->belongsTo(Friendlynumbers::class);
    }
    public function unfriendlynumbers()
    {
        return $this->belongsTo(Unfriendlynumbers::class);
    }
    public function luckycolors()
    {
        return $this->belongsTo(Luckycolors::class);
    }

    public function luckydates()
    {
        return $this->belongsTo(Luckydates::class);
    }
    public function neutralnumbers()
    {
        return $this->belongsTo(Neutralnumbers::class);
    }
    public function personalyear()
    {
        return $this->belongsTo(Personalyear::class);
    }
    public function auspiciousdays()
    {
        return $this->belongsTo(Auspiciousdays::class);
    }
    public function auspiciousmonths()
    {
        return $this->belongsTo(AuspiciousMonths::class);
    }
    public function profession()
    {
        return $this->belongsTo(Profession::class);
    }
    public function quality()
    {
        return $this->belongsTo(Quality::class);
    }

    public function element()
    {
        return $this->belongsTo(Element::class);
    }

    public function zodiac()
    {
        return $this->belongsTo(Zodiac::class);
    }
    
}
