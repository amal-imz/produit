<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{   
	use SoftDeletes;
 protected $dates = ['deleted_at'];

 //un utilisateur crrer 1 ou 1seul (0/1)
 public function user()
 {
 	return $this->belongsTo('App\User');
 }
}
