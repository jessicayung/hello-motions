@extends('template')

@section('title')

  Home

@endsection


@section('content')

<div class="jumbotron">
      <div class="container">
        <h1>Hello, motions!</h1>
        <p>Search for motions by keyword, category, Chief Adjudicator, tournament, or timeframe. <a href="https://docs.google.com/spreadsheets/d/1qQlqFeJ3iYbzXYrLBMgbmT6LcJLj6JcG3LJyZSbkAJY/edit?usp=sharing">Access the motions spreadsheet directly here</a>. </p>

          <form action="search.php" method="get" id="search-motions" >
            <div class="form-group, col-md-6">
                <input class="form-control" type="text" name="q" placeholder="e.g. International Relations, WUDC, Cambridge IV">
            </div>
            <p><div class="form-group">
            <button type="submit" name="search-motions" class="btn btn-primary">Search</button>
            </div></p>
          </form>

          <!-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a> -->
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Want to contribute?</h2>
          <p>We need <b>your help</b> to make sure these motions are comprehensive and up-to-date. <a href="https://docs.google.com/forms/d/14v5RuG6NHjDySrLN8zJC97-e761sRBivhOoPxjt0K6I/viewform?c=0&w=1">Tell us about motions from tournaments here.</a> Or <a href="mailto:jy357@cam.ac.uk">contact me directly</a> if you have other questions / suggestions. Thanks a lot!</p>
        </div>

        <div class="col-md-4">
          <h2>Our Aim</h2>
          <p> No more clicking through a bajillion sites or blog posts to find motions on feminism - we can give you a list of high quality recent ones. You can even <a href="#">generate a random motion from a category for debating practice.</a> </p>
        </div>

        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Full list of <a href="#">categories</a> and <a href="#">tournaments</a> available.</p>
          <p><a class="btn btn-default" href="#" role="button">View details</a></p>
        </div>
        
      </div> <!-- /container -->
<!--
      <div class="container">
        <div class="row">

          <h2> Recent Motions </h2>

          <table class="table table-striped">
            <tr>
             <th>Date</th>
             <th>Tournament</th>
             <th>Round</th>
             <th>Motion</th>
            </tr>
            @foreach ($recentmotions as $motion)
            <tr>
              <td> {{ $motion ->Date }} </td>
              <td> {{ $motion ->Tournament }} </td>
              <td> {{ $motion ->Round }} </td>
              <td> {{ $motion ->Motion }} </td>
            </tr>
            @endforeach
          </table>
-->
      <p><a href="motions2015"> Show Full List for 2015</a></p>
      </div> <!-- /row -->
      </div> <!-- /container -->

@endsection