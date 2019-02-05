<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quot extends Model
{
    //
	protected $table = 'quots';
	protected $primaryKey = 'id';
	protected $fillable = [
		'author',
		'body'
	];
}
