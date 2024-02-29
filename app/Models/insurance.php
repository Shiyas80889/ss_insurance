<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\company;
use App\Models\coverage;
use App\Models\issuer;
use App\Models\segment;

class insurance extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_name',
        'reg_no',
        'company_id',
        'make',
        'model',
        'fuel',
        'seating',
        'gvm_or_cc',
        'manufacturing_year',
        'segment_id',
        'coverage_id',
        'od',
        'tp',
        'net_premium',
        'gst',
        'final_premium',
        'payment_status',
        'collected_prm',
        'policy_number',
        'risk_start_date',
        'ref_name_id',
        'mobile_number',
        'issued_by_id',
        'issued_code',
        'email',
        'payment_mode_id',
        'date',
        'agent_commission',
        'payment_given_to_account',
        'company_payout'
    ];


public function companies()
{
    return $this->belongsTo(Company::class, 'company_id');
}

public function coverages()
{
    return $this->belongsTo(coverage::class, 'coverage_id');
}

public function issuers()
{
    return $this->belongsTo(issuer::class, 'issued_by_id');
}

public function segments()
{
    return $this->belongsTo(segment::class, 'segment_id');
}

}