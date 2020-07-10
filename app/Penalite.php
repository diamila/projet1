<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penalite extends Model
{
     protected $table='contraventionss';
	protected $fillable=[
		'classe',
		'motif',
		'montant',
				
	];
}
