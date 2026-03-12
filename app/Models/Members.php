<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;
 
    public $timestamps = false;
    protected $fillable = [
     'role',
     'fullname',
     'username',
     'email',
     'contact',
     'password',
     'image',
     'email_token',
     'email_verified',
     'account_visibility',
     'date'
    ];
}
