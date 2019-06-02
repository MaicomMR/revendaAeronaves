<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class AirplanesModel extends Model
{
    use Notifiable;
    protected $table = 'airplanes';
    protected $fillable = ['name', 'secondName', 'flightTime', 'actualCity', 'value', 'year', 'observation', 'type', 'description', 'manufacture_id'];

}
