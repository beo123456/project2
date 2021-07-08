<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\models\{Category,Brand};

class Product extends Model
{
    protected $table = 'product';
    public $timestamps = false;


    public function category_foreign()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function brand_foreign(){
        return $this->belongsTo(Brand::class,'brand_id','id');
    }
    


}
