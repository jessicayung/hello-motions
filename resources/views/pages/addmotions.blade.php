@extends('template')

@section('title')

  Add Motions

@endsection

@section('content')

   <div class="container">
        <h1>Add Motions</h1>
        <p>Add your motions to our database.</p>

    <form action="#" method="#" id="addmotions" >
                <div class="form-group">
                    <h3>Tournament Information</h3>
                    <table class="table table-striped">
                      <tr><td>Tournament</td><td><input name="Tournament" placeholder="Tournament Name" type="text" class="form-control" required></td></tr>
                      <tr><td>Date</td><td><input name="Date" type="date" class="form-control"></td></tr>
                      <tr><td>Number of In-Rounds</td><td><input name="In-Rounds" type="number" max="25" class="form-control"></td></tr>
                      <tr><td>CAs</td><td><textarea name="CAs" placeholder="Please enter one CA name on each row." class="form-control"></textarea></td></tr>
                      <tr><td>Circuit</td><td><select name="Circuit" class="form-control">
                        <option value="IoNA">IoNA</option>
                        <option value="NA-Canada">North America and Canada</option>
                        <option value="Europe">Europe</option>
                        <option value="Australia">Australia</option>
                        <option value="Asia">Asia</option>
                      </select></td></tr>
                    </table>

                    <h3>Motions</h3>
                    <table class="table table-striped">
                      <tr><td>Round</td><td>Motion</td><td>Infoslide</td></tr>
                      <tr><td>1</td><td><input name="Motion" type="text" class="form-control" required></td><td><input name="Infoslide" type="text" class="form-control"></td></tr>
                    </table>
                    
                    <button type="submit" name = "submit" value=1 class="btn btn-success">Submit</button>
                </div>

    </form>

@endsection