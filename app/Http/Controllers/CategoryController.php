<?php
/**
 * @author  Phat Le
 */
namespace App\Http\Controllers;

use App\Categories;
use App\Products;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use Response;
use Datatables;
use Auth;
use App\Http\Requests;
use App\Helpers\ConvertString;

class CategoryController extends Controller
{
    public function __construct(Categories $categories)
    {
        $this->_categories = $categories;
        parent::__construct();
    }

    /**
     * get list users to datatables
     *
     * @param
     *            Request
     * @return Response
     */
    public function getCategoriesJson()
    {
        if (! Auth::user()->hasRole('viewCategoryList')) {
            abort('403');
        }
        $cate = Categories::select('id','name', 'image', 'description','created_at','updated_at');
        $buttons = array();
        return Datatables::of($cate)
            ->addColumn('action', function ($cate) {
                $buttons = array();
                if (Auth::user()->hasRole('editCategory')) {
                    $buttons[] = [
                        'href' => 'edit/' . e($cate->id),
                        'icon' => 'edit',
                        'type' => 'primary',
                        'label' => trans('system.edit')
                    ];
                }
                if (Auth::user()->hasRole('deleteCategory')) {
                    $formId = 'delete-category-' . e($cate->id);
                    $buttons[] = [
                        'href' => '#' . e($cate->id),
                        'icon' => 'remove',
                        'type' => 'danger',
                        'delete' => e($cate->id),
                        'id' => $formId,
                        'route' => 'category-del',
                        'label' => trans('system.del'),
                        'htmlOptions' => [
                            "onclick" => "confirmDelete('$formId')"
                        ]
                    ];
                }

                $action = view('partial.action', compact('buttons'))->render();
                return (string)$action;
            })
            ->make(true);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Auth::user()->hasRole('viewCategoryList')) {
            abort('403');
        }
        return view('category.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Auth::user()->hasRole('addCategory')) {
            abort('403');
        }
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request, ConvertString $convertString)
    {
        if (! Auth::user()->hasRole('addCategory')) {
            abort('403');
        }
        $cate = $request->all();
        $time = time();
        $trimSpace = str_replace(" ", "_", strtolower($convertString->convert_vi_to_en($cate['name'])));
        $img_type = $request->file('image')->getClientOriginalExtension();
        $image = \Image::make($request->file('image')->getRealPath());
        $imageName = "img_" . $trimSpace . "_" . $time;
        $image->fit(1024, 720)->save(public_path('images/categories/'. $imageName . '.' . $img_type));
        $cate['image'] = $imageName.".".$img_type;
        Categories::create($cate);
        return redirect()->route('category-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function frontentDetail($id)
    {
        $cates = Categories::all();
        $current_cate = Categories::find($id);
        $products = $this->_categories->productOfCate($id);
        $productsHigh = $this->_categories->productHighOfCate($id);
        return view('category.frontend-detail',compact('products','productsHigh','cates','current_cate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Auth::user()->hasRole('editCategory')) {
            abort('403');
        }
        $cate = Categories::find($id);

        return view('category.edit', compact('cate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ConvertString $convertString, Request $request, $id)
    {
        if (! Auth::user()->hasRole('editCategory')) {
            abort('403');
        }
        $cateUpdate = $request->all();
        $cate = Categories::find($id);

        $cate->name = $cateUpdate['name'];
        $time = time();
        $trimSpace = str_replace(" ", "_", strtolower($convertString->convert_vi_to_en($cate['name'])));
        $imageName = "img_" . $trimSpace . "_" . $time;
        if(isset($cateUpdate['image'])){
            $img_type = $request->file('image')->getClientOriginalExtension();
            $image = \Image::make($request->file('image')->getRealPath());
            $image->fit(1024, 720)->save(public_path('images/categories/'. $imageName . '.' . $img_type));
            \File::delete(public_path('images/categories/' . $cate->image));
            $cate->image = $imageName. "." . $img_type;
        }
        $cate->description = $cateUpdate['description'];
        $cate->save();
        return redirect()->route('category-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Auth::user()->hasRole('deleteCategory')) {
            abort('403');
        }
        // find result by id and delete
        $cate=Categories::find($id);
        \File::delete(public_path('images/categories/' . $cate->image_url));
        $cate->delete();
        // Redirecting to index() method
        return redirect()->route('category-list');
    }
}
