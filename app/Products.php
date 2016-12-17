<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{

    protected $table = 'products';
    protected $fillable = [
        'name',
        'sku',
        'image_1',
        'image_1',
        'image_3',
        'image_4',
        'image_5',
        'image_6',
        'description',
        'short_description',
        'price',
        'highlight',
        'category_id',
        'created_at',
        'updated_at',
    ];

    public function productHigh(){
        $product = Products::where('highlight',1);
        return $product;
    }
    public function productRelated($id, $cate_id){
        $products = Products::leftJoin('categories','products.category_id', '=' , 'categories.id')
            ->where('products.category_id',$cate_id)
            ->whereNotIn('products.id',[$id])
            ->select('products.id','products.name','products.image_1','products.price','products.category_id','products.highlight')
            ->get();
        return $products;
    }
}
