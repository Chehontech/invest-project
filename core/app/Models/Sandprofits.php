<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sandprofits extends Model {
    protected $table = "sand_profits";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function plan()
    {
        return $this->belongsTo('App\Models\Sandplans','plan_id');
    }
}
