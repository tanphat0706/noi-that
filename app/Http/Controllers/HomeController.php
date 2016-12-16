<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
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
        return view('frontend.home', compact('cates'));
    }

    public function admin()
    {
        return view('admin');
    }
}
