<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function add($product_id)
    {
        $data = Product::find($product_id);
        $images = DB::table('images')->where('product_id', '=', $product_id)->get();

        return view('admin.image.image_create', [ 'data' => $data, 'images' => $images]);
    }


    public function create(Request $request, $product_id)
    {
        $data = new Image;
        $data->title = request()->input('title');
        $data->image = Storage::putFile('images', $request->file('image'));
        $data->product_id = $product_id;
        $data->save();

        return redirect(route('adminImageAdd',[ 'product_id' => $product_id]));
    }

    public function destroy(Image $image,$id,$product_id )
    {

        DB::table('images')->where('id', '=', $id)->delete();
        return redirect(route('adminImageCreate',[ 'product_id' => $product_id, 'id' => $id]));
    }
}
