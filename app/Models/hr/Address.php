<?php

namespace App\Models\hr;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'addresses';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'district_id',
        'current_address',
        'permanent_address',
        'postal_code',
        'created_by',
    ];
}
