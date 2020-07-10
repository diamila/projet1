<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caisse extends Model
{


    protected $table='constats';
	protected $fillable=[

		'prenom_nom_C',
		'permis_conduire_C',
		'carte_grise',
		'date_accusation',
		'date_limite_versement',
		'heure_accusation',
		'lieu_accusation',
		'ref',
		'contraventions_id',
		'users_id',
		'statut',

		
	];

    //
}
