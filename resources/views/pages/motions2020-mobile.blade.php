@extends('template')

@section('title')

  2029 Motions

@endsection

@section('content')  

  <h1>2020 Motions</h1>
    <p>Listed with most recent tournaments first. Can't find a tournament? <a href="https://docs.google.com/forms/d/14v5RuG6NHjDySrLN8zJC97-e761sRBivhOoPxjt0K6I/viewform?c=0&w=1">Send us the motions here</a>. </p>
    <p> <a href="motions2020">Full version</a></p>

  <table class="table table-striped">
    <tr>
     <th>Tournament</th>
     <th>Motion</th>
    </tr>
    <!--Output data of each row-->
    @foreach ($motions2020 as $motion)
      <tr>
        <td> {{ $motion ->Tournament }} </td>
        <td> {{ $motion ->Motion }} </td>
      </tr>
    @endforeach
   </table>

@endsection
