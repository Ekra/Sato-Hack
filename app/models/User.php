<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
<<<<<<< HEAD
	protected $guarded = array('password', 'remember_token');

	//validation
	public static $rules  = array(
	'names'           => 'required',
	'phone'			 => 'required|numeric|unique:users',
	'marital_status' =>'required',
	'gender'		 => 'required',
	);

	public static $updateRules = array(
	'names'       => 'required',
	'phone'			 => 'required|numeric',
	'marital_status' =>'required',
	'gender'		 => 'required',

	);
=======
>>>>>>> c38a752649ee9d8ff0c1beb028772a14d4b39fcb

}
