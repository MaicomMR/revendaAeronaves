<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class BuyContactModel extends Model
{
    use Notifiable;
    protected $table = 'buycontact';
    protected $fillable = ['contactName', 'email', 'phone', 'productId'];

}
