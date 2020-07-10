@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')

 <div class="col-md-8 col-md-offset-2">
  <form action="<?= route('penalite.update', ['id' =>$penalite->id])?>" method='POST' class="form-horizental">
            {{csrf_field() }}
           


  <div class="form-group">
            <label for="classe">Classe:</label>
            <input type="text" class="form-control" name="classe" value="<?= $penalite->classe ?>">
          </div>

          <div class="form-group">
            <label for="motif">Motif:</label>
            <input type="text" class="form-control" name="motif" value="<?= $penalite->motif ?>">
          </div>

          <div class="form-group">
            <label for="montant">Montant:</label>
            <input type="text" class="form-control" name="montant" value="<?= $penalite->montant ?>">
          </div>

         
         


    <button type="submit" class="btn btn-raised btn-success">update</button>
    <button type="reset" class="btn btn-raised btn-success">effacer</button>
          

  </form>
  </div>



       @endsection 