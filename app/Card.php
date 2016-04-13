<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Note;
class Card extends Model
{
   	protected $fillable = ['title'];
	public function notes()
	{
		return $this->hasMany(Note::class);
	}
	public function addNote(Note $note, $userId)
		{
			$note->user_id = $userId;
			return $this->notes()->save($note);
		}
	public function addCard(Card $card)
		{
			return $this->save($card);
		}
}
