
#resources>views>cards>index.blade.php

@extends('layout')

@section('content')
	<h1>All cards</h1>

	@foreach($cards as $card)
	{{ $cards}}

	#{{ $card->title}}
@stop

#view chnages in localhost:8000/cards
	