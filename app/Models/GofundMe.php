<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GofundMe extends Model
{
    use HasFactory;
    protected $fillable = [
      'firstname',
      'lastname',
      'area_of_fundraising',
      'country',
      'reason_of_fundraising',
      'amount',
      'date',
      'subject_means',
      'status',
      'relations'
    ];
}
