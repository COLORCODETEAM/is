<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model {

    protected $table = 'task';
    public $timestamps = false;
    
    public function userRequest() {
        return $this->belongsTo('App\Task', 'create_user');
    }
    
    public function userContact() {
        return $this->belongsTo('App\Task', 'contact_user');
    }
}
