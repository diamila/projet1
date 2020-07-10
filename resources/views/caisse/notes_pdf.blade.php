<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>votre reçu</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <style>
   .container{
    padding: 5%;
   } 

   .h1{
     color: red;
   }

</style>
</head>
<body>



  <h1 style="color: DarkCyan" >reçu du paiement</h1> <br> <br>

    <div id="#myTable12'" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
          <div class="col-sm-12">
<table class="table table-bordered table-striped id="laravel_crud" style="border: 5px solid black" >
   <thead>  

         @foreach ($caisse as $caisse )

                   

                  <tr>
                  <th width="5%" >Prenom chauffeur :</th>
                   <td><?=$caisse->prenom_nom_C ?> </td>
                  </tr>

                   <tr>
                  <th width="5%" >Permis :</th>
                   <td><?=$caisse->permis_conduire_C ?> </td>
                  </tr>

                   <tr>
                  <th width="10%" >Carte grise :</th>
                  <td><?=$caisse->carte_grise ?> </td>
                  </tr>

                   <tr>
                   <th width="10%" >Date Accusation :</th>
                   <td><?=$caisse->date_accusation ?> </td>
                  </tr>

                   <tr>
                  <th width="10%" >Date limite Versement :</th>
                   <td><?=$caisse->date_limite_versement ?> </td>
                  </tr>

                   <tr>
                   <th width="10%" >Heure accusation :</th>
                   <td><?=$caisse->heure_accusation ?> </td>
                  </tr>

                   <tr>
                 <th width="10%" >Lieu accusation :</th>
                  <td><?=$caisse->lieu_accusation ?> </td>
                  </tr>

                   <tr>
                   <th width="10%" >Ref :</th>
                   <td><?=$caisse->ref ?> </td>
                  </tr>

                   <tr>
                   <th width="20%" >Infraction :</th>
                 <td><?=$caisse->motif ?> </td>
                  </tr>

                   <tr>
                 <th width="5%" >Montant :</th>
                   <td><?=$caisse->montant ?> </td>
                  </tr>

                   <tr>
                  <th width="5%" >Agent circulation :</th>
                   <td><?=$caisse->name ?> </td> 
                  </tr>

                  <tr>
                  <th width="5%" >Nom Commissariat :</th>
                   <td><?=$caisse->commissariat ?> </td> 
                  </tr>

                   <tr>
                  <th width="5%" >Date payement</th>
                   <td><?=date('d-m-Y') ?> </td> 
                  </tr>

                  

                   <tr>
                 <th width="5%" >Statut</th>
                  <td><a href="" >payer</a><span class="glyphicon glyphicon-edit"></span></td> 
                  </tr>



   @endforeach
            
              </tbody>
              
</table>
</body>
</html>