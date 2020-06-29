<?php 
namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
class voitures extends Model
{
	use SoftDeletes;
	protected $dates = ['deletes_at'];
}