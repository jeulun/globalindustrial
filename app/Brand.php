<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Brand extends Model
{
    protected $table = 'brand';

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}
