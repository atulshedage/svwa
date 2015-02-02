<?php
namespace svwa\users;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Eloquent,Hash;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $fillable = ['username','password','email','first_name','last_name'];
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/*
	 * Store all passwords in hash
	 */
	public function setPasswordAttribute($password)
	{
		$this->attributes['password'] = Hash::make($password);
	}

	/*
	 * RelationShip with User Table
	 * User Has Many BlogPosts
 	*/
	public function blogPosts()
	{
		return $this->hasMany('svwa\BlogPosts\BlogPost');
	}

	/*
 * RelationShip with User Table
 * User Has Many BlogPosts
 */
	public function profile()
	{
		return $this->hasOne('svwa\users\Profile');
	}


	public static function signup($username,$email,$password)
	{
		$user = new static (compact('username','email','password'));

		return $user;
	}

	public static function update_profile($first_name,$last_name)
	{
		$user = new static (compact('first_name','last_name'));

		return $user;
	}
}
