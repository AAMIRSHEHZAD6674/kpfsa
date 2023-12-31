<?php

namespace App\Models\hr;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'role',
        'status',
        'created_by'
    ];
}
