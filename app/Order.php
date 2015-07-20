<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    protected $table = 'order';
    public $timestamps = false;
    
    public function orderDetail()
    {
        return $this->hasMany('App\OrderDetail');
    }
    
    public function user() {
        return $this->belongsTo('App\User', 'order_by');
    }
    
    public function user_received() {
        return $this->belongsTo('App\User', 'received_by');
    }
    
    public function user_checked() {
        return $this->belongsTo('App\User', 'checked_by');
    }
    
}
