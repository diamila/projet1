@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <form action="<?= route('penalite.store')?>" method='POST' class="form-horizental">
            {{csrf_field() }}

          <div class="form-group">
            <label for="classe">Classe:</label>
            <input type="text" class="form-control" name="classe">
          </div>

          <div class="form-group">
            <label for="motif">Motif:</label>
            <input type="text" class="form-control" name="motif">
          </div>

          <div class="form-group">
            <label for="montant">Montant:</label>
            <input type="text" class="form-control" name="montant">
          </div>

         
       


            <button type="submit" class="btn btn-raised btn-success">Ajouter</button>



        </form>
      </div>



@endsection
