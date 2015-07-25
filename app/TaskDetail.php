<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskDetail extends Model {

    protected $table = 'task_detail';
    public $timestamps = false;
    
    public function task() {
        return $this->belongsTo('App\Task');
    }
    
    public function device() {
        return $this->belongsTo('App\Device', 'equipment_id');
    }
}