@extends('template')

@section('title')

  EUDC Motions

@endsection

@section('content')  

  <h1>EUDC Motions</h1>

  <h3>2017 Tallinn EUDC</h3>
  <p>CA Team: Steven Ramesh Rajavinothan, Helena Ivanov, Dan Lahav, Rebecca Irvine, Thomas Simpson, Olivia Sundberg</p>
  <p>Motions: We'll find out soon! :) For more info visit <a href="http://tallinneudc.com/">the Tallinn EUDC website</a>.</p>
  <p>
  <ul>
  	<li><a href="http://hellomotions.com/search?q=Steven+Ramesh+Rajavinothan%2C+Dan+Lahav%2C+Thomas+Simpson%2C+Helena+Ivanov%2C+Rebecca+Irvine%2C+Olivia+Sundberg&search-motions=">Motions set by members of the Tallinn eudc CA Team</a></li>
  </ul>  
  </p>

  <p><b>Shortcuts to 2007-2016 EUDC motions</b></p>
  <p>
  <ul>
  	<li><a href="#eudc2016">2016</a> <a href="#eudc2015">2015</a> <a href="#eudc2014">2014</a> <a href="#eudc2013">2013</a> <a href="#eudc2012">2012</a> <a href="#eudc2011">2011</a></li>
  	<li><a href="#eudc2010">2010</a> <a href="#eudc2009">2009</a> <a href="#eudc2008">2008</a> <a href="#eudc2007">2007</a></li>
  </ul>
  </p>

  <h3 id="eudc2016">2016 Warsaw EUDC</h3>  
  <p>CA Team: Emilia Carlqvist, Harish Natarajan, Adam Hawksbee, Helena Ivanov, Radu Cotarcea, Yael Bezalel</p>
 
  <table class="table table-striped">
    <tr>
     <th>Round</th>
     <th>Motion</th>
     <th>Infoslide</th>
    </tr>
    @foreach ($eudc2016motions as $motion)
      <tr>
        <td> {{ $motion ->Round }} </td>
        <td> {{ $motion ->Motion }} </td>
        <td> {{ $motion ->Infoslide }} </td>
      </tr>
    @endforeach 
   </table>

  <h3 id="eudc2015">2015 Vienna EUDC</h3>
  <p>CA Team: Christine Simpson, Michael Shapira, Amanda Moorghen, Emilia Carlqvist, Gavin Illsley</p>

  <table class="table table-striped">
    <tr>
     <th>Round</th>
     <th>Motion</th>
     <th>Infoslide</th>
    </tr>
    @foreach ($eudc2015motions as $motion)
      <tr>
        <td> {{ $motion ->Round }} </td>
        <td> {{ $motion ->Motion }} </td>
        <td> {{ $motion ->Infoslide }} </td>
      </tr>
    @endforeach 
   </table>

  <h3 id="eudc2014">2014 Zagreb EUDC</h3>
  <p>CA team: Rebecca Meredith, Milan Vignjevic, Alon van Dam, Ashish Kumar,  Engin Arikan, Maja Cimerman, Sella Nevo, Tomas Beerthuis</p>

	<table class="table table-striped">
    <tr>
     <th>Round</th>
     <th>Motion</th>
     <th>Infoslide</th>
    </tr>
    @foreach ($eudc2014motions as $motion)
      <tr>
        <td> {{ $motion ->Round }} </td>
        <td> {{ $motion ->Motion }} </td>
        <td> {{ $motion ->Infoslide }} </td>
      </tr>
    @endforeach 
   </table>

  <h3 id="eudc2013">2013 Manchester EUDC</h3>
  <p>CA Team: Shengwu Li, Omer Nevo, Joe Roussos, Dessislava Kirova, Filip Dobranic, Andrew Tuffin</p>

  <table class="table table-striped">
    <tr>
     <th>Round</th>
     <th>Motion</th>
     <th>Infoslide</th>
    </tr>
    @foreach ($eudc2013motions as $motion)
      <tr>
        <td> {{ $motion ->Round }} </td>
        <td> {{ $motion ->Motion }} </td>
        <td> {{ $motion ->Infoslide }} </td>
      </tr>
    @endforeach 
   </table>

  <h3 id="eudc2012">2012 Belgrade EUDC</h3>
  <p>CA Team: Art Ward, Isabelle Loewe, filip Dobranic, Stephen Boyle, Benjamin Woolgar, Manos Moschopoulos</p>
  <!-- from http://eudc.wikidot.com/adjudication -->

  <table class="table table-striped">
    <tr>
     <th>Round</th>
     <th>Motion</th>
     <th>Infoslide</th>
    </tr>
    @foreach ($eudc2012motions as $motion)
      <tr>
        <td> {{ $motion ->Round }} </td>
        <td> {{ $motion ->Motion }} </td>
        <td> {{ $motion ->Infoslide }} </td>
      </tr>
    @endforeach 
   </table>

  <!--
	<h3 id="eudc2011">2011 Galway EUDC</h3>
	<p>CA Team: Ruth Faller, Yoni Cohen-Idov, Simone Van Elk, Shengwu Li, Steven Nolan</p>

	<table class="table table-striped">
    <tr>
     <th>Round</th>
     <th>Motion</th>
     <th>Infoslide</th>
    </tr>
    @foreach ($eudc2011motions as $motion)
      <tr>
        <td> {{ $motion ->Round }} </td>
        <td> {{ $motion ->Motion }} </td>
        <td> {{ $motion ->Infoslide }} </td>
      </tr>
    @endforeach 
   </table>

	<h3 id="eudc2010">2010 Amsterdam EUDC</h3>
	<p>CA Team: Leela Koenig, Doug Cochran, Jonathan Leader Maynard, Ross Reid McGuire</p>

	<table class="table table-striped">
    <tr>
     <th>Round</th>
     <th>Motion</th>
     <th>Infoslide</th>
    </tr>
    @foreach ($eudc2010motions as $motion)
      <tr>
        <td> {{ $motion ->Round }} </td>
        <td> {{ $motion ->Motion }} </td>
        <td> {{ $motion ->Infoslide }} </td>
      </tr>
    @endforeach 
   </table>

	<h3 id="eudc2009">2009 Newcastle EUDC</h3>
	<p>CA Team: Sam Block, James Dray, Leela Koenig, Bob Nimmo, Uve Poom, Alex Ward</p>
	
	<table class="table table-striped">
    <tr>
     <th>Round</th>
     <th>Motion</th>
     <th>Infoslide</th>
    </tr>
    @foreach ($eudc2009motions as $motion)
      <tr>
        <td> {{ $motion ->Round }} </td>
        <td> {{ $motion ->Motion }} </td>
        <td> {{ $motion ->Infoslide }} </td>
      </tr>
    @endforeach 
   </table>

	<h3 id="eudc2008">2008 Tallinn EUDC</h3>
	<p>CA Team: Neill Harvy-Smith, Sam Block, Diarmuid Early, Isabelle Loewe, Erin O'Brien</p>

	<table class="table table-striped">
    <tr>
     <th>Round</th>
     <th>Motion</th>
     <th>Infoslide</th>
    </tr>
    @foreach ($eudc2008motions as $motion)
      <tr>
        <td> {{ $motion ->Round }} </td>
        <td> {{ $motion ->Motion }} </td>
        <td> {{ $motion ->Infoslide }} </td>
      </tr>
    @endforeach 
   </table>

	<h3 id="eudc2007">2007 Koc EUDC</h3>
	<p>CA Team: Can Okar, Anat Gelber, Will Jones</p>

	<table class="table table-striped">
    <tr>
     <th>Round</th>
     <th>Motion</th>
     <th>Infoslide</th>
    </tr>
    @foreach ($eudc2007motions as $motion)
      <tr>
        <td> {{ $motion ->Round }} </td>
        <td> {{ $motion ->Motion }} </td>
        <td> {{ $motion ->Infoslide }} </td>
      </tr>
    @endforeach 
   </table>
   -->
<!--

CA team info from 1999 - 2012 at http://eudc.wikidot.com/adjudication

	-->
@endsection
