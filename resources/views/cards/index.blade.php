@extends('layouts.app')

@section('content')
<h3 class="header">All my cards</h3>
	@foreach ($cards as $card)

       	 <div> <a href="cards/{{$card->id}}">{{ $card->title }}</a>
       	 <li class="list-group-item"><a role="button" class="btn btn-primary" href="/cards/{{$card->id}}/delete">Delete</a>
       	 </div>
    @endforeach
 @if (Auth::user())
    <h3>Add a new Card</h3>

		<form method="POST" action="/cards/new" class="form-horizontal">
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
				<textarea name="title" class="form-control">{{ old('title') }}</textarea>
			</div>
			<div class="from-group">
				<button type="submit" class="btn btn-primary">Add Card</button>
			</div>
		</form>
   @endif



@stop
