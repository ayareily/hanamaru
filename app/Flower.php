<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Flower extends Model
{
    protected $fillable = ['foruser', 'body', 'published_at'];
    protected $dates = ['published_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
}
