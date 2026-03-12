<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundRaisingMembers extends Model
{
    use HasFactory;
    protected $fillable = [
    'type_of_partnership',
    'username',
    'email_address',
    'contact',
    'nature_of_collaboration',
    'organization_name',
    'organization_user_position',
    'date',
    'state',
    'reference_id',
    'time_reply',
    ];
}
