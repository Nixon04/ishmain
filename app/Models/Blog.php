<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

  public $timestamps = false;

  protected $fillable = [
    'category',
    'title',
    'user_id',
    'sub_content',
    'content',
    'date',
    'reference_log',
    'minutes_header',
    'status',
    'image',
    'updated_date',
  ];
}
