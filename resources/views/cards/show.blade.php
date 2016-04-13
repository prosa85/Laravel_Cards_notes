@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h1> {{$card->id}}</h1>
		<h1> {{$card->title}}</h1>

		<ul class="list-group">
			@foreach($card->notes as $note)
				<li class="list-group-item"><a role="button" class="btn btn-primary" href="/notes/{{$note->id}}/edit">Edit</a>
				{{ $note->body }}
				<a href="#" class="pull-right">{{ $note->user->name }}</a>
				</li>
			@endforeach
		</ul>
		@if (Auth::user())
			<h3>Add a new note</h3>

			<form method="POST" action="/cards/{{$card->id}}/notes" class="form-horizontal">
			<hr>


				@if (count($errors))
					<div class="form-group">
						<div class="control-group error">
							@foreach($errors->all() as $error)
								<span class="help-inline"> {{ $error }} </span>
							@endforeach
						</div>
					</div>
					<hr>
				@endif

	<!--		<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
				{{ csrf_field() }}
				<div class="from-group">
					<textarea name="body" class="form-control">{{ old('body') }}</textarea>
				</div>
				<div class="from-group">
					<button type="submit" class="btn btn-primary">Add Note</button>
				</div>
			</form>
		@endif

		</div>
</div>
@stop
