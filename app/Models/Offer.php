<?php

namespace App\Models;

use App\Models\Skill;
use App\Models\Study;
use App\Models\Company;
use App\Models\Workday;
use App\Models\Contract;
use App\Models\Occupation;
use App\Models\SalaryRange;
use App\Models\Municipality;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Offer extends Model
{
    protected $table = 'offers';
    
    protected $fillable = [
        'months_experience',
        'company_id',
        'skill_id',
        'salary_id',
        'occupation_id',
        'contract_type_id',
        'workday_id',
        'academic_level_id',
        'ubication_id',
        'start_date',
        'closing_date',
        'requisition_id'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function skill(): BelongsTo
    {
        return $this->belongsTo(Skill::class);
    }

    public function salary(): BelongsTo
    {
        return $this->belongsTo(SalaryRange::class);
    }

    public function occupation(): BelongsTo
    {
        return $this->belongsTo(Occupation::class);
    }

    public function contract_type(): BelongsTo
    {
        return $this->belongsTo(Contract::class);
    }

    public function workday(): BelongsTo
    {
        return $this->belongsTo(Workday::class);
    }

    public function academic_level(): BelongsTo
    {
        return $this->belongsTo(Study::class);
    }

    public function ubication(): BelongsTo
    {
        return $this->belongsTo(Municipality::class);
    }
}
