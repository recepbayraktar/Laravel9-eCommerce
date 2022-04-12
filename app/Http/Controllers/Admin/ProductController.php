<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Schema;

class ProductController extends Controller
{

    public function index()
    {
        $dataList = Product::all();

        return view('admin.product.product', ['dataList' => $dataList]);
    }

    public function create(){
        return Controller::insert(new Product, route('adminCategory'));
    }


    public function add()
    {
        $dataList = Category::All();

        return view('admin.product.product_add',['dataList' => $dataList]);
    }

    public function edit(Product $product,$id)
    {
        $data = Product::find($id);
        $dataList = Category::with('children')->get();
        return view('admin.product.product_edit', [ 'data' => $data, 'dataList' => $dataList]);
    }

    public function destroy(Product $product,$id)
    {
        DB::table('products')->where('id', '=', $id)->delete();
        return redirect()->route('adminProduct');
    }

    public function update($id){
        return Controller::insert(new Product(), route('adminCategory'),$id);
    }
}
