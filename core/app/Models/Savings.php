<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Savings extends Model {
    protected $table = "savings";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }   
}
