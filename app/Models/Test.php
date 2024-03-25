<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model {
	use HasFactory;

	protected $fillable = [
		'id', 'name', 'year_level', 'course', 'message', 'created_at', 'updated_at',
	];
}
