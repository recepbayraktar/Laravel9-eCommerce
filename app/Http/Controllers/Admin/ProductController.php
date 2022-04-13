<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;


class ProductController extends Controller
{
    protected $appends = [
        'getParentsTree'
    ];


    public function index()
    {
        $dataList = Product::all();

        return view('admin.product.product', ['dataList' => $dataList]);
    }

    public function add()
    {
        $dataList = Product::All();

        return view('admin.product.product_add',['dataList' => $dataList]);
    }

    public function create(Request $request)
    {
        $data = new Product;
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
        $data->image = Storage::putFile('images', $request->file('image'));

        $data->save();

        return redirect(route('adminProduct'));
    }

    public function edit(Product $product,$id)
    {
        $data = Product::find($id);
        $dataList = Category::All();
        return view('admin.product.product_edit', [ 'data' => $data, 'dataList' => $dataList]);
    }

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

    public function destroy(Product $product,$id)
    {
        DB::table('products')->where('id', '=', $id)->delete();
        return redirect()->route('adminProduct');
    }

}
