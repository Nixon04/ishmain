<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chartflow extends Model
{
    use HasFactory;

    public $timestamp = false;

    protected $fillable = [
         'current_year',
         'current_month',
         'data_events'
    ];
}
