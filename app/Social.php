<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    //
    protected $fillable = [
        'user_id', 'facebook', 'twitter', 'google'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
