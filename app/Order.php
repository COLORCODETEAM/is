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
}
