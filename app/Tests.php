<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tests extends Model {

	protected $fillable = ['title', 'image', 'place', 'lat', 'lng'];


	protected $guarded = ['id'];

}

