<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BringMaterial extends Model {

    protected $table = 'bring_material';
    public $timestamps = false;

    public function bringMaterialDetail() 
    {
        return $this->hasMany('App\BringMaterialDetail');
    }
}
