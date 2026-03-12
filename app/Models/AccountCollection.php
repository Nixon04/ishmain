<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountCollection extends Model
{
    use HasFactory;

    protected $fillable= [
     'reference_id',
     'username',
     'amount',
     'reasons',
     'payment_type',
     'email_address',
     'contact_address',
     'region_code',
     'country',
     'status',
     'date',
     'auth_code',
     'card_type',
     'signature',
     'account_name',
     'expiring_month',
    ];
}
