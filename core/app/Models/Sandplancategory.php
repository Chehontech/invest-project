<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sandplancategory extends Model {
    protected $table = "sand_plan_category";
    protected $guarded = [];

    public function cated()
    {
        return $this->belongsTo('App\Models\Sandplans','cat_id');
    }
}
