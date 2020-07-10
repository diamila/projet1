@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    

   
<div class="panel panel-default basecom">
        <div class="panel-heading">Recherche</div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="post" action="<?= route('caisse.store')?>" >
                
                 {{ csrf_field() }}
                
                   
           <div class="col-sm-12">         
            <div class="col-sm-3">
            <button type="submit" class="btn btn-raised btn-success">Recherche</button>
          </div>
    
          <div class="col-sm-3">
            <label for="montant">saisir Ref pour pouvoir valider un payement et d'imprimer un reçu</label>
            <input type="text" class="form-control" name="ref">
            </div>
            
    
          </div>


            </form>


                            

                               
        </div>
    </div>




   
    <div class="panel panel-default">

    	 <div class="panel-heading">LISTES DES IMPAYES</div>
        
    <!-- /.box-header -->
    <div class="box-body">
        
           
      <div id="#myTable12'" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
          <div class="col-sm-12">
           <table class="table table-bordered table-striped {{ count($caisse) > 0 ? 'datatable' : '' }} dt-select">
              <thead>
                  <tr  >
                      <th width="5%" >ID</th>
                      <th width="5%" >Prenom chauffeur</th>
                       <th width="5%" >Permis</th>
                      <th width="10%" >Carte grise</th>
                       <th width="10%" >Date Accusation</th>
                      <th width="10%" >Date limite Versement</th>
                      <th width="10%" >Heure accusation</th>
                      <th width="10%" >Lieu accusation</th>
                       <th width="10%" >Ref</th>
                      <th width="20%" >Infraction</th>
                       <th width="5%" >Montant</th>
                      <th width="5%" >Agent circulation</th>
                       <th width="5%" >Commissariat </th> 
                       <th width="5%" >Statut</th>
                      
                    
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
                              <a href="<?=route('caisse.edit', ['id' =>$caisse->id]) ?>" >impayer</a>
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

