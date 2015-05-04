<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BringMaterialDetail extends Model {

	protected $table = 'bring_material_detail';
        public $timestamps = false;
        
        public function material() {
        return $this->belongsTo('App\Material');
    }
}
