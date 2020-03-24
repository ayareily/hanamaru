<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    protected $fillable = ['body', 'published_at'];
    protected $dates = ['published_at'];//
}
