<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/*
class Lister extends Model
{
	/*
    //
      protected $table = 'users';
}*/
 /*  public function user() {
      //return $this->belongsTo('App\User', 'user_id', 'id');
   }

   protected $table = 'users';
//print_r($table);
//echo $table;
}*/
class Etudiant extends Model
{
    protected $table = 'etudiant';

	protected $fillable = [
		'id',
        'parentId',
        'avatar',
		'prenom',
		'nom',
		'sexe',
		'dateNaissance',
		];

    public function parent()
    {
        return $this->belongsTo(Parents::class);
    }
    public function professeur()
    {
        return $this->belongsTo(Professeur::class);
    }
   
}