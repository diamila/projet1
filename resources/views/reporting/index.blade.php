@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')




  <p>
       <a href="{{ route('reporting.create') }}"  class="create-modal btn btn-success btn-sm">bilan constat</a>
    </p>


     
    <div class="panel panel-default">

       <div class="panel-heading">l'ensemble des fiches</div>



        
    <!-- /.box-header -->
    <div class="box-body">       
      <div class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
          <div class="col-sm-12">
            <table id="myTable1" class="table table-bordered table-striped ">
              <thead>
                  
                  <tr  >
                      <th width="2%" >ID</th>
                      <th width="3%" >Prenom chauffeur</th>
                       <th width="2%" >Permis</th>
                      <th width="3%" >Carte grise</th>
                       <th width="10%" >Date Accusation</th>
                      <th width="10%" >Date limite Versement</th>
                      <th width="5%" >Heure accusation</th>
                      <th width="5%" >Lieu accusation</th>
                       <th width="5%" >Ref</th>
                      <th width="15%" >Infraction</th>
                       <th width="5%" >Montant</th>
                       <th width="5%" >Agent circulation</th>
                       <th width="5%" >Commissariat </th> 
                       <th width="5%" >statut</th>
                      
                    
                  </tr>
                  {{ csrf_field() }}
              </thead>
              <tbody>
                  @foreach ($caisse as $caisse )

                      <tr >
                          <td>{{ $caisse ->id }}</td>
                           <td><?=$caisse->prenom_nom_C ?> </td>
                           <td><?=$caisse->permis_conduire_C ?> </td>
                           <td><?=$caisse->carte_grise ?> </td>
                           <td><?=$caisse->date_accusation ?> </td>
                           <td><?=$caisse->date_limite_versement ?> </td>
                           <td><?=$caisse->heure_accusation ?> </td>
                            <td><?=$caisse->lieu_accusation ?> </td>
                           <td><?=$caisse->ref ?> </td>
                           <td><?=$caisse->motif ?> </td>
                           <td><?=$caisse->montant ?> </td>
                            <td><?=$caisse->name ?> </td> 
                            <td><?=$caisse->commissariat?> </td> 
                           <td>
                              <?php 
                              if($caisse->statut==1) 
                                {
                              ?>
                            <button class="btn btn-info ">
                              <a href="" >payer</a>
                              <span class="glyphicon glyphicon-edit"></span>
                          </button>
                              <?php } 
                              else
                                {
                              ?>
                            <button class="delete-modal btn btn-danger ">
                              <a href="" >impayer</a>
                              <span class="glyphicon glyphicon-edit"></span>
                          </button>
                              <?php } ?>

                           </td> 
                            


                       
                       </tr>
                 @endforeach
              </tbody>
              
            </table>


          </div>
        </div><!-- col-sm-12 -->
        
      </div><!-- row -->
   


  
       @endsection 

