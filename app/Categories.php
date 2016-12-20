<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    protected $table = 'categories';
    protected $fillable = [
        'name',
        'alias',
        'image',
        'description',
        'created_at',
        'updated_at',
    ];
    public function getCateAlias($id){
        $cate_alias = Categories::where('id',$id)->select('alias')->get()->first();
        return $cate_alias;
    }
    public function productOfCateForMenu($id){
        $products = Products::leftJoin('categories','products.category_id', '=' , 'categories.id')
            ->where('products.category_id',$id)
            ->select('products.alias','products.id','products.name','products.image_1','products.old_price','products.price','products.category_id','products.highlight')->get();
        return $products;
    }
    public function productOfCate($id){
        $products = Products::leftJoin('categories','products.category_id', '=' , 'categories.id')
            ->where('products.category_id',$id)
            ->select('products.alias','products.id','products.name','products.image_1','products.old_price','products.price','products.category_id','products.highlight')->paginate(10);
        return $products;
    }
    public function productHighOfCate($id){
        $products = Products::leftJoin('categories','products.category_id', '=' , 'categories.id')
            ->where('products.category_id',$id)
            ->where('products.highlight', 1)
            ->select('products.alias','products.id','products.name','products.image_1','products.old_price','products.price','products.category_id','products.highlight')
            ->get();
        return $products;
    }
}
