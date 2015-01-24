<?php
namespace dvwa\users;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Eloquent;

class Profile extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profiles';

    protected $fillable = ['first_name','last_name'];

    /*
     * RelationShip with User Table
     * User Belongs to users
     */
    public function user()
    {
        return $this->belongsTo('dvwa\users\User');
    }

    public static function update_profile($first_name,$last_name)
    {
        $profile = new static (compact('first_name','last_name'));

        return $profile;
    }
}
