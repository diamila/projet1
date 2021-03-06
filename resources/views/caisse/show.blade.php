@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
  
    <!-- Main content -->
    <!-- Main content -->
   
     <div class="row">

       <div class="panel-heading">VALIDER PAYEMENT</div>
        
       
   </div>   
    <div class="panel panel-default">
        
    <!-- /.box-header -->
    <div class="box-body">
        
       <div class="box-body">       
      <div class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
          <div class="col-sm-12">
            <table  id="myTable1" class="table table-bordered table-striped ">
              <thead>
                  <tr  >
                      <th width="5%" >ID</th>
                      <th width="5%" >Prenom et nom chauffeur</th>
                       <th width="5%" >Permis</th>
                      <th width="10%" >Carte grise</th>
                       <th width="10%" >Date Accusation</th>
                      <th width="10%" >Date limite Versement</th>
                      <th width="10%" >Heure accusation</th>
                      <th width="10%" >Lieu accusation</th>
                       <th width="10%" >Ref</th>
                      <th width="20%" >Infraction</th>
                       <th width="5%" >Montant</th>
                       <th width="5%" >Commissariat </th> 
                       <th width="9%" > Statut </th>
                      
                    
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
                             <td><?=$caisse->commissariat?> </td> 
                           <td>
                              <?php 
                              if($caisse->statut==1) 
                                {
                              ?>
                            <button class="btn btn-info ">
                              <a href="" >deja payer</a>
                              <span class="glyphicon glyphicon-edit"></span>
                          </button>
                              <?php } 
                              else
                                {
                              ?>
                            <button class="delete-modal btn btn-danger ">
                              <a href="<?=route('caisse.edit', ['id' =>$caisse->id]) ?>" style='color: black' >validé paiement</a>
                              <span class="glyphicon glyphicon-edit"></span>
                          </button>
                              <?php } ?>

                           </td> 
                            


                       
                       </tr>
                 @endforeach
              </tbody>
              
            </table>


            <button class="delete-modal btn btn-danger ">
                              <a href="<?=route('caisse.index') ?>" >Retour</a>
                              <span class="glyphicon glyphicon-edit"></span>
                          </button>
          </div>
        </div><!-- col-sm-12 -->
        
      </div><!-- row -->
       @endsection 