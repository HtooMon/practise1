<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

         protected $fillable = [
        'name',
    ];
    public function subcategories()
    {
        return $this->hasManyThrough(
            'App\Subcategory',
            'App\Item',
            'category_id', // Foreign key on users table...
            'category_id', // Foreign key on posts table...
            'id', // Local key on countries table...
            'id' // Local key on users table...
        );
    }
    
}


