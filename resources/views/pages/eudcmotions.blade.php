@extends('template')

@section('title')

  EUDC Motions

@endsection

@section('content')  

  <h1>EUDC Motions</h1>

  <h3>2016 Warsaw EUDC</h3>  
  <p>CA Team: Emilia Carlqvist, Harish Natarajan, Yael Bezalel, Radu Cotarcea, Adam Hawksbee, Helena Ivanov</p>

  <table class="table table-striped">
    <tr>
     <th>Round</th>
     <th>Motion</th>
     <th>Infoslide</th>
    </tr>
      <tr>
        <td> Round </td>
        <td> Tn blah blah blah </td>
        <td> </td>
      </tr>
    @endforeach
   </table>

   <h3>2013 Manchester EUDC</h3>
   <p>CA Team: Shengwu Li, Omer Nevo, Leyla Orak, Filip Dobranic, Dessislava Kirova, Joe Roussos</p>

   <h3>2012 Belgrade EUDC</h3>
   <p>CA Team: Art Ward, Isabelle Fischer, Stephen Boyle, Filip Dobranic, Benjamin Woolgar</p>

   <h3>Durham EUDC 2003</h3>
   <p>CA Team: Tom Hamilton, Mila Turajilic</p>

@endsection
