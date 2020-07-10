@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')



    <!-- Main content -->
    <!-- Main content -->
   
     <div class="row">

       <div class="panel-heading">reçu payement</div>
       
   </div>   
    <div class="panel panel-default">


      

     
        
    <!-- /.box-header -->
    <div class="box-body">
        
           
     <div class="box-body">       
      <div class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
          <div class="col-sm-12">
            <div class="col-12">
         
          <table class="table table-bordered" id="laravel">
                <thead>


                  

                    <a href="<?=route('pdf', ['id' =>$caisse->id]) ?>" class="btn btn-success mb-2">Imprimer reçu</a>
                      


                     <tr>
                  <th width="5%" >ID</th>
                    <td>{{ $caisse ->id }}</td>
                  </tr>

                  <tr>
                  <th width="5%" >Prenom chauffeur</th>
                   <td><?=$caisse->prenom_nom_C ?> </td>
                  </tr>

                   <tr>
                  <th width="5%" >Permis</th>
                   <td><?=$caisse->permis_conduire_C ?> </td>
                  </tr>

                   <tr>
                  <th width="10%" >Carte grise</th>
                  <td><?=$caisse->carte_grise ?> </td>
                  </tr>

                   <tr>
                   <th width="10%" >Date Accusation</th>
                   <td><?=$caisse->date_accusation ?> </td>
                  </tr>

                   <tr>
                  <th width="10%" >Date limite Versement</th>
                   <td><?=$caisse->date_limite_versement ?> </td>
                  </tr>

                   <tr>
                   <th width="10%" >Heure accusation</th>
                   <td><?=$caisse->heure_accusation ?> </td>
                  </tr>

                   <tr>
                 <th width="10%" >Lieu accusation</th>
                  <td><?=$caisse->lieu_accusation ?> </td>
                  </tr>

                   <tr>
                   <th width="10%" >Ref</th>
                   <td><?=$caisse->ref ?> </td>
                  </tr>

                   <tr>
                   <th width="20%" >Infraction</th>
                 <td><?=$caisse->motif ?> </td>
                  </tr>

                   <tr>
                 <th width="5%" >Montant</th>
                   <td><?=$caisse->montant ?> </td>
                  </tr>

                   <tr>
                  <th width="5%" >Agent circulation</th>
                   <td><?=$caisse->name ?> </td> 
                  </tr>

                  <tr>
                  <th width="5%" >Nom Commissariat</th>
                   <td><?=$caisse->commissariat ?> </td> 
                  </tr>

                   <tr>
                  <th width="5%" >Date payement</th>
                   <td><?=date('d-m-Y') ?> </td> 
                  </tr>

            
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