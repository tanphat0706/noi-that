<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class QueryController extends Controller
{
    public function search(Request $request)
    {
        // Gets the query string from our form submission
        $query = $request->input('search');
        // Returns an array of articles that have the query string located somewhere within
        // our articles titles. Paginates them so we can break up lots of search results.
        $search_result = DB::table('products')->where('name', 'LIKE', '%' . $query . '%')->paginate(10);
        // returns a view and passes the view the list of articles and the original query.
        return view('frontend.search', compact('search_result', 'query'));
    }
}
