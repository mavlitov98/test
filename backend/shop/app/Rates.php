<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Rates extends Model
{
    protected $table = 'rates';
    protected $fillable = ['rate_id', 'name', 'price', 'available_day'];
}
