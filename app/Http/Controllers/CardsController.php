<?php

namespace App\Http\Controllers;


use App\Card;
use App\Note;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CardsController extends Controller
{
    //
	public function index()
	{
		$cards = Card::all();

		return view('cards.index', compact('cards'));
	}

	public function show(Card $card)
	{	$card->load('notes.user'); //to load the notes and the users
		//return $card;


	 	return view('cards.show', compact('card'));
	}

	public function storeCard(Request $request)
	{
		//return "text";
		$this->validate($request, [

			'title' => 'required'
		]);
		$card= new Card($request->all());
	 	$card->save();
		return back();
	}
	public function delete(Card $card)
	{
		$notes = Note::where('card_id', $card->id)->delete();
	  	$card->delete();
		return back();

	}

}


