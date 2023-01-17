<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $table = 'parents';

	protected $fillable = [
		'id',
		'lastname',
		'firstname',
		'email',
		'telephone',
        'lieu',
        'password'
		];

        public function parent()
        {
            return $this->hasMany(Etudiant::class, 'parentId');
        }
        public function getId()
        {
        return $this->id;
        }
}