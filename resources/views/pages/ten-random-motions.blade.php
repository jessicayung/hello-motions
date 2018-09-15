@extends('template')

@section('title')

  Random Motions

@endsection

@section('content')  

    <h1>Ten Random Motions</h1>

        @foreach ($tenrandommotions as $motion) 
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
