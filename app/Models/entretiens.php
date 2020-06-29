<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class entretiens extends Model
{
    protected $table="entretiens";
    protected $fillable=[
    	'id','description','date_debut','date_fin'





    ];
}
