@extends('template')

@section('title')

  EUDC Motions

@endsection

@section('content')  

  <h1>EUDC Motions</h1>

  <h3>Shortcuts to 2012-2018 EUDC motions</h3>
  <p>
  <ul>
  	<li><a href="#eudc2018">2018</a> <a href="#eudc2017">2017</a> <a href="#eudc2016">2016</a> <a href="#eudc2015">2015</a> <a href="#eudc2014">2014</a> <a href="#eudc2013">2013</a> <a href="#eudc2012">2012</a> <!--<a href="#eudc2011">2011</a>--></li>
  	<!--<li><a href="#eudc2010">2010</a> <a href="#eudc2009">2009</a> <a href="#eudc2008">2008</a> <a href="#eudc2007">2007</a></li>-->
  </ul>
  </p>

  <h3 id="eudc2018">2018 Novi Sad EUDC</h3>  
  <p>CA Team: Duncan Crowe, Olivia Sundberg Diez, Daan Welling, Dee Courtney, Gigi Gil, Ilija Ivanisevic, Yair Har-Oz</p>
 
  <table class="table table-striped">
    <tr>
     <th>Round</th>
     <th>Motion</th>
     <th>Infoslide</th>
    </tr>
    @foreach ($eudc2018motions as $motion)
      <tr>
        <td> {{ $motion ->Round }} </td>
        <td> {{ $motion ->Motion }} </td>
        <td> {{ $motion ->Infoslide }} </td>
      </tr>
    @endforeach 
   </table>


  <h3 id="eudc2017">2017 Tallinn EUDC</h3>  
  <p>CA Team: Steven Ramesh Rajavinothan, Helena Ivanov, Dan Lahav, Rebecca Irvine, Thomas Simpson, Olivia Sundberg</p>
 
  <table class="table table-striped">
    <tr>
     <th>Round</th>
     <th>Motion</th>
     <th>Infoslide</th>
    </tr>
    @foreach ($eudc2017motions as $motion)
      <tr>
        <td> {{ $motion ->Round }} </td>
        <td> {{ $motion ->Motion }} </td>
        <td> {{ $motion ->Infoslide }} </td>
      </tr>
    @endforeach 
   </table>

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

CA team info from 1999 - 2012 at http://eudc.wikidot.com/adjudication

	-->
@endsection
