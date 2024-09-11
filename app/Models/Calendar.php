<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
  use HasFactory;

  protected $fillable = [
    'id',
    'user_id',
    'event_name',
    'start_date',
    'end_date',
    'school_year',
    'pin',
    'created_at',
    'updated_at',
	];
}
