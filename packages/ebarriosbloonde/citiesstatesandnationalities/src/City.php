<?php

namespace EBarriosBloonde\CitiesStatesAndNationalities;

use Illuminate\Database\Eloquent\Model;

class City extends Model {

	protected $table = 'cities';
	public $timestamps = true;
    protected $fillable = [
        'id',
    ];
}