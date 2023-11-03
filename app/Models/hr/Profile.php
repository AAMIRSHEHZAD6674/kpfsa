<?php

namespace App\Models\hr;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'mobile_no',
        'alternate_mobile_no',
        'cnic',
        'gender',
        'date_of_birth',
        'marital_status',
        'father_name',
        'spouse_name',
        'spouse_cnic',
        'created_by',

    ];
}
