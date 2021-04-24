<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiagnosisData extends Model
{
    protected $fillable = [
        'id',
        'qualitative_index',
        'big_category',
        'mid_category',
        'small_category',
        'promotion_title',
        'promotion',
        'qual_quan',
        'current',
        'future',
        'reason',
        'action',
        'timestamps',
    ];
    protected $hidden = [
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];

}
