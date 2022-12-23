<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    protected $table = 'professeur';

	protected $fillable = [
		'id',
		'nom',
		'prenom',
		'email',
		'telephone',
        'adresse',
        'role',
        'password'
		];

        public function parent()
        {
            return $this->hasMany(Etudiant::class, 'parentId');
        }
        public function etudiant()
         {
        return $this->belongsTo(Etudiant::class);
        }
}