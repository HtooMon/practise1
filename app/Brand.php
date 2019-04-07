<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name',
    ];
   public function brands()
    {
        return $this->hasManyThrough('App\Subcategory', 'brand_id');
    }
}
