<?php

namespace App\Models\hr;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    use HasFactory;

    protected $table = 'bank_accounts';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'bank_name',
        'branch_code',
        'branch_address',
        'account_title',
        'account_number',
        'iban',
        'created_by',
    ];
}
