<?php

namespace App\Models;

use App\Models\Offer;
use App\Models\Municipality;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';

    protected $fillable = [
        'company_name',
        'nit_number',
        'address',
        'telephone',
        'email',
        'ubication_id'
    ];

    public function offer()
    {
        return $this->hasMany(Offer::class);
    }

    public function municipality()
    {
        return $this->belongsTo(Municipality::class, 'ubication_id');
    }

    public function requisitions()
    {
        return $this->hasMany(Requisition::class);
    }
}
