<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    use HasFactory;

    protected $table = 'studies';

    protected $fillable = [
        'academic_level'
    ];

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class, 'academic_level_id');
    }

}
