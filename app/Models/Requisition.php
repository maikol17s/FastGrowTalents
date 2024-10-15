<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
    use HasFactory;

    protected $table = 'requisitions';

    protected $fillable = [
        'company_id',
        'occupation_description',
        'candidate_talents',
        'responsibilities',
        'selection_criteria',
        'justification',
        
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
