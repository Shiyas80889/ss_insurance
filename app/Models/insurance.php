<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    ];
}
