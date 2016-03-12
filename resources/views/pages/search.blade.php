@extends('template')

@section('title')

	Search

@endsection

@section('content')

	<h1>Search for Motions</h1>
	<p>Search for motions by keyword, category, Chief Adjudicator or tournament. <a href="https://docs.google.com/spreadsheets/d/1qQlqFeJ3iYbzXYrLBMgbmT6LcJLj6JcG3LJyZSbkAJY/edit?usp=sharing">Access the motions spreadsheet directly here</a>. </p>

    <form action="search" method="get" id="search-motions" >
	    <div class="form-group, col-md-6">
	        <input class="form-control" type="text" name="q" placeholder="e.g. International Relations, WUDC, Cambridge IV">
	    </div>
	    <p><div class="form-group">
	    <button type="submit" name="search-motions" class="btn btn-primary">Search</button>
	    </div></p>
    </form>

	@if (count($motions) === 0)

		<p> Your query returned 0 results.</p>

	@elseif (count($motions) >= 1)

  		 <table class="table table-striped">
		    <tr>
		     <th>Date</th>
		     <th>Tournament</th>
		     <th>Round</th>
		     <th>Motion</th>
		    </tr>
		    <!--Output data of each row-->
		    @foreach ($motions as $motion)
		      <tr>
		        <td> {{ $motion ->Date }} </td>
		        <td> {{ $motion ->Tournament }} </td>
		        <td> {{ $motion ->Round }} </td>
		        <td> {{ $motion ->Motion }} </td>
		      </tr>
		    @endforeach
	   </table>

	@endif
@endsection
