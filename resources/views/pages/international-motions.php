@extends('template')

@section('title')

  International Motions

@endsection

@section('content')  

  <h1>International Motions</h1>
    <p>Listed with most recent tournaments first. Can't find a tournament? <a href="https://docs.google.com/forms/d/14v5RuG6NHjDySrLN8zJC97-e761sRBivhOoPxjt0K6I/viewform?c=0&w=1">Send us the motions here</a>. </p>
    <p> <a href="international-motions-mobile">Mobile version</a></p>

  <table class="table table-striped">
    <tr>
     <th>Date</th>
     <th>Tournament</th>
     <th>Round</th>
     <th>Motion</th>
    </tr>
    <!--Output data of each row-->
    @foreach ($internationalmotions as $motion)
      <tr>
        <td> {{ $motion ->Date }} </td>
        <td> {{ $motion ->Tournament }} </td>
        <td> {{ $motion ->Round }} </td>
        <td> {{ $motion ->Motion }} </td>
      </tr>
    @endforeach
   </table>

@endsection
