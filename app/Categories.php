<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    protected $table = 'categories';
    protected $fillable = [
        'name',
        'image',
        'description',
        'created_at',
        'updated_at',
    ];

    public function productOfCate($id){
        $products = Products::leftJoin('categories','products.category_id', '=' , 'categories.id')->where('products.category_id',$id)->select('products.id','products.name','products.image_1','products.price','products.category_id','products.highlight')->get();
        return $products;
    }
    public function productHighOfCate($id){
        $products = Products::leftJoin('categories','products.category_id', '=' , 'categories.id')->where('products.category_id',$id)->where('products.highlight', 1)->select('products.id','products.name','products.image_1','products.price','products.category_id','products.highlight')->get();
        return $products;
    }
}
