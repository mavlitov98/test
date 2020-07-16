<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';
    protected $fillable = ['name', 'email', 'phone', 'address', 'day', 'rate'];

}
