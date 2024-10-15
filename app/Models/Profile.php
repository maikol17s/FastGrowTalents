<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'experience_id',
        'language_id',
        'education_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function education()
    {
        return $this->belongsTo(Education::class);
    }
}
