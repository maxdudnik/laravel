<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	public $timestamps = true;

	protected $fillable = ['username',
		'email',
		'firstname'];

	public static $rules = [
		'username' => 'required',
		'password' => 'required',
		'email' => 'required',
		'firstname' => 'required',
		'lastname' => 'required',

	];

	public $errors;

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

	public function isValid() {

		$validator = Validator::make($this->attributes, static::$rules);

		if ($validator->passes()) {
			return true;
		}

		$this->errors = $validator->messages();

		return false;
	}

}
