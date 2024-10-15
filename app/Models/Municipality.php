<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    protected $fillable = [
        'municipality_name',
    ];

    public function companies()
    {
        return $this->hasMany(Municipality::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
