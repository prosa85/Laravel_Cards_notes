<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
	protected $fillable = ['body']; //es el unico campo q se puede actualizar por insercion
	public function card()
	{
		return $this->belongsTo(Card::class);
	}
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
