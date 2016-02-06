@extends('template')

@section('title')

	Search

@endsection

@section('content')

	<div class="container">

	<h1>Search for Motions</h1>
	<p>Search for motions by keyword, category, Chief Adjudicator, tournament, or timeframe. <a href="https://docs.google.com/spreadsheets/d/1qQlqFeJ3iYbzXYrLBMgbmT6LcJLj6JcG3LJyZSbkAJY/edit?usp=sharing">Access the motions spreadsheet directly here</a>. </p>

	<form action="search.php?go" method="get" id="searchform" >
	                <div class="form-group, col-md-6">
	                    <input name="q" class="form-control" type="text" placeholder="e.g. International Relations, WUDC, Cambridge IV">
	                </div>
	                <p><div class="form-group">
	                <button type="submit" name = "submit" value=1 class="btn btn-success">Search</button>
	                </div></p>

	</form>

	<!--database query-->

@endsection
