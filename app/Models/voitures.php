<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class voitures extends Model
{
     protected $table="voitures";
    protected $fillable=[
    	'id','marque','modele','matricule','carburant','type','assurances','kilometrage',/*'debutassurance','finassurance',/*'nombreplaces',*/'puissance',/**'couleur'*/





    ];
}


