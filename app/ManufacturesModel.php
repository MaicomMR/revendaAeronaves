<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AirplanesModel;

class ManufacturesModel extends Model
{
    protected $table = 'manufactures';

    public function manufactureName(){
        return $this->belongsTo('App\AirplanesModel', 'manufacture_id', 'id');
    }
}
