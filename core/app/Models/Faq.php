<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model {
    protected $table = "faq";
    protected $guarded = [];

    public function cat()
    {
        return $this->belongsTo('App\Models\Faqcategory','cat_id');
    }
}
