<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryRange extends Model
{
    use HasFactory;

    protected $fillable = [
        'salary_range'
    ];

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
