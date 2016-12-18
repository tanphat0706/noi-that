<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Http\Requests;
use App\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Products $products)
    {
        $this->_products = $products;
        // $this->middleware('auth');
        parent::__construct();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cates = Categories::limit(3)->get();
        $product_high = $this->_products->productHigh()->limit(15)->get();
        return view('frontend.home', compact('cates','product_high'));
    }
    public function admin()
    {
        return view('admin');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function notfound()
    {
        return view('errors.404');
    }
}
