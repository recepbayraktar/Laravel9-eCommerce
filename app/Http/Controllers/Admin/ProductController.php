<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataList = DB::table('products')->get(); 
        return view('admin.product.product', ['dataList' => $dataList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        DB::table('products')->insert([
            
            'slug' => request()->input('slug'),
            'title' => request()->input('title'),
            'description' => request()->input('description'),
            'image' => request()->input('iamge'),
            'tax' => request()->input('tax'),
            'quantity' => request()->input('quantity'),
            'detail' => request()->input('detail'),
            'keywords' => request()->input('keywords'),
            'price' => request()->input('price')
                      
        ]);
        return redirect(route('adminProduct'));
    }

    public function add()
    {
        return view('admin.product.product_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,$id)
    {
        $data = Product::find($id);
        $dataList = Category::All();
        return view('admin.product.product_edit', [ 'data' => $data, 'dataList' => $dataList]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product,$id)
    {
        $data = Product::find($id);
        $data->slug = request()->input('slug');
        $data->title = request()->input('title');
        $data->description = request()->input('description');
        $data->image = request()->input('iamge');
        $data->tax = request()->input('tax');
        $data->quantity = request()->input('quantity');
        $data->detail = request()->input('detail');
        $data->keywords = request()->input('keywords');
        $data->price = request()->input('price');
        $data->user_id = Auth::id();
        $data->save();
        return redirect()->route('adminProduct');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {
        DB::table('products')->where('id', '=', $id)->delete();
        return redirect()->route('adminProduct');
    }
}
