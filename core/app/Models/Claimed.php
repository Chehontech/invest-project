<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Claimed extends Model {
    protected $table = "claimed";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function plan()
    {
        return $this->belongsTo('App\Models\Plans','plan_id');
    }    
    public function profit()
    {
        return $this->belongsTo('App\Models\Profits','profit_id');
    }
}
