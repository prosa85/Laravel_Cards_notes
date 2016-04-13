@extends('layouts.app')

@section('content')

	<h1>Edit note </h1>
	<form method="POST" action="/notes/{{ $note->id }}">
		{{ method_field('PATCH') }}
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="from-group">
				<textarea name="body" class="form-control">{{$note->body}}</textarea>
			</div>
			<div class="from-group">
				<button type="submit" class="btn btn-primary">Update Note</button>
			</div>
		</form>

@stop
