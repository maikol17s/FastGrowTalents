<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'education';

    protected $fillable = [
        'user_id',
        'academic_level_id',
        'institution_name',
        'certificate_archive',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function academic_level()
    {
        return $this->belongsTo(Study::class);
    }

}
