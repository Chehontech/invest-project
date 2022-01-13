<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sandplans extends Model {
    protected $table = "sand_plan";
    protected $guarded = [];

    public function cated()
    {
        return $this->belongsTo('App\Models\Sandplancategory','cat_id');
    }
}
