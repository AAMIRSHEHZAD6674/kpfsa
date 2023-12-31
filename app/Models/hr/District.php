<?php

namespace App\Models\hr;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class District extends Model
{
    use HasFactory;

    protected $table = 'districts';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'operational',
        'code',
        'operational_district_id',
        'division',
    ];
}
