<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

    protected $table = 'task';
    public $timestamps = false;
    
    public function userRequest() {
        return $this->belongsTo('App\User', 'create_user');
    }
    
    public function userContact() {
        return $this->belongsTo('App\User', 'contact_person');
    }
    
    public function userAssign() {
        return $this->belongsTo('App\User', 'assign_person');
    }
    
    public function taskDetail() {
        return $this->hasMany('App\TaskDetail');
    }
}