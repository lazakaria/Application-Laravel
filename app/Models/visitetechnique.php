<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class visitetechnique extends Model
{
    protected $table="assurance";
    protected $fillable=[
    	'id','numvisite','date_debut','date_fin','date_fin','observation','agenceviste','prixviste'





    ];
}
