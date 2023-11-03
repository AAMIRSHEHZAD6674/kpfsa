<?php

namespace App\Models\hr;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmergencyContact extends Model
{
    use HasFactory;

    protected $table = 'emergency_contacts';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'primary_contact',
        'alternate_contact',
        'relationship',
        'created_by',
    ];
}
