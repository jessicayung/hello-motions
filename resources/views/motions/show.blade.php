@extends('template')

@section('title')

	Motion

@endsection

@section('content')


<h1>{{$motion->motion}}</h1>

<h2>Infoslide</h2>
<p>{{$motion->infoslide}}</p>

<table class="table table-striped">
    <tr>
     <th>Date</th>
     <th>Tournament</th>
     <th>Round</th>
    </tr>
    <!--Output data of each row-->
    <tr>	
      <td> {{ $motion ->Date }} </td>
      <td> {{ $motion ->Tournament }} </td>
      <td> {{ $motion ->Round }} </td>
    </tr>
</table> 

@endsection
