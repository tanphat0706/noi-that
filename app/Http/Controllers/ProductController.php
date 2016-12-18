<?php
/**
 * @author  Phat Le
 */
namespace App\Http\Controllers;

use App\Categories;
use App\Products;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use Response;
use Datatables;
use Auth;
use App\Http\Requests;
use App\Helpers\ConvertString;

class ProductController extends Controller
{
    public function __construct(Categories $categories,Products $products)
    {
        $this->_products = $products;
        $this->_categories = $categories;
        parent::__construct();
    }

    /**
     * get list product to datatables
     *
     * @param
     *            Request
     * @return Response
     */
    public function getProductsJson()
    {
        if (! Auth::user()->hasRole('viewProductList')) {
            abort('403');
        }
        $product = Products::select('products.id','products.name','products.highlight', 'price', 'products.short_description', 'categories.name as cateName','products.created_at as pro_create','products.updated_at as pro_update')
            ->leftJoin('categories', 'categories.id', '=', 'products.category_id');
        $buttons = array();
        return Datatables::of($product)
            ->editColumn('highlight', function ($product) {
                return $product->highlight == 1 ? '<i class="fa fa-check text-success"></i>' : '';
            })
            ->editColumn('short_description', function($product){
                $string = (strlen($product->short_description) > 50) ? substr($product->short_description,0, 50).'...' : $product->short_description;
                return $string;
            })
            ->editColumn('price', function($product){
                $price = number_format($product->price);
                return $price;
            })
            ->addColumn('action', function ($product) {
                $buttons = array();
                if (Auth::user()->hasRole('editProduct')) {
                    $buttons[] = [
                        'href' => 'edit/' . e($product->id),
                        'icon' => 'edit',
                        'type' => 'primary',
                        'label' => trans('system.edit')
                    ];
                }
                if (Auth::user()->hasRole('deleteProduct')) {
                    $formId = 'delete-product-' . e($product->id);
                    $buttons[] = [
                        'href' => '#' . e($product->id),
                        'icon' => 'remove',
                        'type' => 'danger',
                        'delete' => e($product->id),
                        'id' => $formId,
                        'route' => 'product-del',
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
        if (! Auth::user()->hasRole('viewProductList')) {
            abort('403');
        }
        return view('product.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Auth::user()->hasRole('addProduct')) {
            abort('403');
        }
        $cates = $this->_categories->orderBy('name')->lists('name', 'id');
        return view('product.create', compact('cates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request, ConvertString $convertString)
    {
        if (! Auth::user()->hasRole('addProduct')) {
            abort('403');
        }
        $product = $request->all();
        $product['price'] = str_replace(',', '', $product['price']);
        $trimSpace = str_replace(" ", "_", strtolower($convertString->convert_vi_to_en($product['name'])));
        $alias = str_replace(" ", "-", strtolower($convertString->convert_vi_to_en($product['name'])));
        for ($i=1;$i<7;$i++){
            if(isset($product['image_'.$i])){
                $img_type[$i] = $request->file('image_'.$i)->getClientOriginalExtension();
                $image[$i] = \Image::make($request->file('image_'.$i)->getRealPath());
                $imageName[$i] = "img_" . $trimSpace .'_'.$i;
                $image[$i]->fit(800, 560)->save(public_path('images/products/'. $imageName[$i] . '.' . $img_type[$i]));
                $product['image_'.$i] = $imageName[$i].".".$img_type[$i];
            }
        }
        $product['alias'] = $alias;
        if(isset($product['highlight'])){
            $product['highlight'] = 1;
        }else{
            $product['highlight'] = 0;
        }
        Products::create($product);
        return redirect()->route('product-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function frontentDetail($cate_alias, $pro_alias)
    {
        $product = Products::where('alias',$pro_alias)->get()->first();
        if($product == null){
            abort(404);
        }
        $cate = Categories::find($product->category_id);
        $related = $this->_products->productRelated($product->id,$product->category_id);
        return view('product.frontend-detail', compact('product','cate','related'));
    }
//    public function frontentDetail($id)
//    {
//        $product = Products::find($id);
//        $cate = Categories::find($product->category_id);
//        $related = $this->_products->productRelated($id,$product->category_id);
//        return view('product.frontend-detail', compact('product','cate','related'));
//    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Auth::user()->hasRole('editProduct')) {
            abort('403');
        }
        $cates = $this->_categories->orderBy('name')->lists('name', 'id');
        $product = Products::find($id);
        return view('product.edit', compact('cates','product'));
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
        if (! Auth::user()->hasRole('editProduct')) {
            abort('403');
        }
        $pro_update = Products::find($id);
        $product = $request->all();
        $pro_update->name = $product['name'];
        $pro_update->sku = $product['sku'];
//        $pro_update->price = $product['price'];
        $pro_update->price = str_replace(',', '', $product['price']);
        $pro_update->description = $product['description'];
        $pro_update->short_description = $product['short_description'];
        $pro_update->category_id = $product['category_id'];
        if(isset($product['highlight'])){
            $pro_update->highlight = 1;
        }else{
            $pro_update->highlight = 0;
        }
        $trimSpace = str_replace(" ", "_", strtolower($convertString->convert_vi_to_en($pro_update->name)));
        $alias = str_replace(" ", "-", strtolower($convertString->convert_vi_to_en($pro_update->name)));
        for ($i=1;$i<7;$i++){
            if(isset($product['image_'.$i])){
//                dd($pro_update->image_5);
                $img_fields = 'image_'.$i;
                $img_type[$i] = $request->file('image_'.$i)->getClientOriginalExtension();
                $image[$i] = \Image::make($request->file('image_'.$i)->getRealPath());
                $imageName[$i] = "img_" . $trimSpace .'_'.$i;
                $image[$i]->fit(800, 560)->save(public_path('images/products/'. $imageName[$i] . '.' . $img_type[$i]));
                $pro_update->$img_fields = $imageName[$i].".".$img_type[$i];
            }
        }
        $pro_update->alias = $alias;
        $pro_update->save();
        return redirect()->route('product-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Auth::user()->hasRole('deleteProduct')) {
            abort('403');
        }
        // find result by id and delete
        $product=Products::find($id);
        for($i=1;$i<7;$i++) {
            $img_fields = 'image_'.$i;
//            dd($product->$img_fields);
            \File::delete(public_path('images/products/' . $product->$img_fields));
        }
        $product->delete();
        // Redirecting to index() method
        return redirect()->route('product-list');
    }
}
