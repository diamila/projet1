@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    
   <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <style>
            body
            {
              

               background-image: url("{{asset('/photo/image0.png')}}");

              color: blue;
           
            }
        </style>
        <title>Premiers tests du CSS</title>
    </head>

    <body>





      <p>
       <a href="{{ route('penalite.create') }}"  class="create-modal btn btn-success btn-sm"> Ajouter</a>
    </p>


    <!-- Main content -->
  <div class="panel panel-default basecom">

      <div class="panel-heading">la liste des contraventions routiéres</div>

    
    <!-- /.box-header -->
    <div class="box-body">       
      <div class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
          <div class="col-sm-12">
            <table id="myTable1" class="table table-bordered table-striped ">
              <thead>
                  
                  <th width="1">ID</th>
                  <th width="1">Classe</th>
                  <th width="5">Infraction</th>
                  <th width="1">Montant</th>
                   <th width="1">Action</th>
                
                  {{ csrf_field() }}
              </thead>
              <tbody>
                  @foreach ($penalite as $penalites)
                      <tr class="item{{$penalites->id}}" id="item-penalites-{{$penalites->id}}">
                          <td>{{ $penalites->id }}</td>
                          <td>{{ $penalites->classe }}</td>
                          <td>{{ $penalites->motif}}</td>
                          <td>{{ $penalites->montant}}</td>
                          
                          <td>
                         <button class="btn btn-info ">
                            <a href="<?=route('penalite.edit', ['id' =>$penalites->id]) ?>" >modifier</a>
                            <span class="glyphicon glyphicon-edit"></span>
                        </button>


                         <button class="delete-modal btn btn-danger"  >
                            <a href=""><span class="glyphicon glyphicon-trash"></span> Supprimer</a>
                            
                        </button>
                         

                       
                        </td>
                       </tr>
                 @endforeach
              </tbody>
              
            </table>
          </div>
        </div><!-- col-sm-12 -->
        
      </div><!-- row -->
    </div>
  </div>

  <div>{{ $penalite->render()}}</div>       


        
    </body>
</html>

  
       @endsection 










