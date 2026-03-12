<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GofundRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
     'firstname',
     'lastname',
     'email',
     'contact',
     'password',
     'confirm_token',
     'date',
     'reference_id_url',
     'current_amount',
     'amount_check',
     'verified_status'
    ];
}
