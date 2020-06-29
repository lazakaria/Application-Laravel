<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Assurances extends Model
{
    protected $table="Assurances";
    protected $fillable=[
    	'id','numassurances','agence_assurances','contact','tel','date_debut','date_fin'





    ];
}

