<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','user_id','price','content','category_id','feature_image_path'];

    public function images()
    {
        return $this->hasMany(ProductImage::class,'product_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'product_tags','product_id','tag_id')
                    ->withTimestamps();
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function productImages()
    {
        return $this->hasMany(ProductImage::class,'product_id');
    }
}
