<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sandfollowed extends Model {
    protected $table = "sand_followed";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function plan()
    {
        return $this->belongsTo('App\Models\Sandplans','plan_id');
    }
}
