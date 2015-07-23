<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

    use Authenticatable,
        CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['firstname', 'lastname', 'email', 'password', 'phone', 'avatar', 'create_user', 'created_at', 
        'update_user', 'updated_at', 'user_role_id', 'flag'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function userRole() {
        return $this->belongsTo('App\UserRole');
    }

    public function userStock() {
        return $this->hasMany('App\UserStock');
    }

    public function repairDevice() {
        return $this->hasMany('App\RepairDevice');
    }

    public function lendDevice() {
        return $this->hasMany('App\LendDevice');
    }

    public function bringMaterial() {
        return $this->hasMany('App\BringMaterial');
    }

    public function bookingRoom() {
        return $this->hasMany('App\BookingRoom');
    }

    public function order() {
        return $this->hasMany('App\Order');
    }
    
    public function task() {
        return $this->hasMany('App\Task');
    }

}
