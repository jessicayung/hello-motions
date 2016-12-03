@extends('template')

@section('title')

  Debating Motions

@endsection

@section('description')
Search for motions by keyword, category, Chief Adjudicator or tournament.
@endsection


@section('content')

<div class="jumbotron">
      <div class="container">
        <h1>Hello, motions!</h1>
        <p>Search for motions by keyword, category, Chief Adjudicator or tournament. <a href="https://docs.google.com/spreadsheets/d/1qQlqFeJ3iYbzXYrLBMgbmT6LcJLj6JcG3LJyZSbkAJY/edit?usp=sharing">Access the motions spreadsheet directly here</a>. </p>

          <form action="search" method="get" id="search-motions" >
            <div class="form-group, col-md-6">
                <input class="form-control" type="text" name="q" placeholder="e.g. International Relations, WUDC, Cambridge IV">
            </div>
            <p>
              <div class="form-group">
                <button type="submit" name="search-motions" class="btn btn-success">Search</button>
              </div>
            </p>
          </form>

          <!-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a> -->
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">

        <h2>New Features</h2>
          <p><ol>
            <li><a href="http://hellomotions.com/search?q=Syed+Saddiq%2C+Karin+Merckens%2C+Hyewon+Rho%2C+Michael+Dunn+Goekjian%2C+Omer+Nevo%2C+Jodie+O%27Neill%2C+Veenu+Goswami%2C+Yashodhan+Nair%2C+Ingrid+Rodriguez&intl=0">Motions set by Dutch WUDC CA team</a></li>
            <li><a href="wudc-motions">WUDC Motions</a></li>
            <li><a href="random-motion">Random Motion</a></li>
            <li><a href="search">Filter for only international tournaments</a></li>
          </ol></p>
        </div>

        <div class="col-md-4">
          <h2>Want to contribute?</h2>
          <p>
            <ul>
              <li>We need <b>your help</b> to make sure these motions are comprehensive and up-to-date. <a href="https://docs.google.com/forms/d/14v5RuG6NHjDySrLN8zJC97-e761sRBivhOoPxjt0K6I/viewform?c=0&w=1">Tell us about motions from tournaments here.</a> <a href="missingmotions">Here is a list of motions we are missing.</a></li>
              <li><a href="mailto:jy357@cam.ac.uk">Contact me directly</a> if you have other questions / suggestions. Thanks a lot!</li>
            </ul>
          </p>
        </div>

        <div class="col-md-4">
          <h2>Our Aim</h2>
          <p> No more clicking through a bajillion sites or blog posts to find motions on feminism - we can give you a list of recent ones.</p>
          <p><a class="btn btn-default" href="about" role="button">Read More</a></p>
        </div>

      </div> <!-- /row -->
    </div> <!-- /container -->
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

        <p><a href="motions2016"> Show Full List for 2016</a></p>
        <p><a href="motions2015"> Show Full List for 2015</a></p>
        <p><a href="motions2014"> Show Full List for 2014</a></p>
        <p><a href="motions-2013-and-earlier"> Show Full List for 2013 and earlier</a></p>
        <p><a href="search"> Show All Motions</a></p>
      </div> <!-- /row -->
    </div> <!-- /container -->

@endsection