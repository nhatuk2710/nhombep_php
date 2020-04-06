<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $fillable = ['category_name'];

    public function Product(){
        return $this->hasMany("\App\Product");
    }

//    public function Brand(){
//        return $this->hasMany("\App\Brand");
//    }
}
