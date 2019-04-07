<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'category_id', 'subcategory_id', 'brand_id', 'name', 'price', 'description',
    ];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
  	public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
}
