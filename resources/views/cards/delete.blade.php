@extends('layouts.app')


@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h1> {{$card->id}}</h1>
		<h1> {{$card->title}}</h1>
	</div>
	@foreach($card->notes as $note)
		<li class="list-group-item"><a role="button" class="btn btn-primary" href="/notes/{{$note->id}}/edit">Edit</a>
			{{ $note->body }}
			<a href="#" class="pull-right">{{ $note->user->name }}</a>
		</li>
	@endforeach
</div>

@stop
