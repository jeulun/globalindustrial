<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['quantity'];
    
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function brands()
    {
        return $this->belongsToMany('App\Brand');
    }

    public function presentPrice()
    {
        return money_format('$%i', $this->price / 100);
    }

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }
}
