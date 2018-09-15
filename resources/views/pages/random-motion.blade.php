@extends('template')

@section('title')

  Random Motion

@endsection

@section('content')  

	<h1>Random Motion</h1>

	<p><a href="/ten-random-motions">Ten Random Motions</a></p>

		@foreach ($randommotions as $motion) 
		<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<b>{{ $motion -> Motion }}</b>
				<div>
					<p>{{ $motion -> Infoslide }}</p>	
				</div>
				<div class="text-right">
					<p><a href="/search?q={{ $motion -> Tournament}}">{{ $motion -> Tournament }}</a> / {{ $motion -> Round }} / {{ $motion -> Date }}</p>
				</div>
			</div>
		</div>
		</div>
		@endforeach
	
@endsection
