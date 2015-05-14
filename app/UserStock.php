<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserStock extends Model {

    protected $table = 'user_stock';
    public $timestamps = false;
    
    public function user() {
        return $this->belongsTo('App\User', 'users_id');
    }
    
    public function stock() {
        return $this->belongsTo('App\Stock', 'stock_id');
    }
}
