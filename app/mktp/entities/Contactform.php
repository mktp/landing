<?php namespace App\mktp\entities;

use Illuminate\Database\Eloquent\Model;

class Contactform extends Model {

	//
	protected $fillable = array('id', 'name', 'email', 'city', 'group', 'subject', 'text');
}
