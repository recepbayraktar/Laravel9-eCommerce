<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataList = DB::table('categories')->get(); 

        return view('admin.category', ['dataList' => $dataList]);
    }

    public function add()
    {
        return view('admin.category_add');
    }


     /**
     * Display a listing of the resource.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('categories')->insert([
            'slug' => request()->input('email'),
            'title' => request()->input('title'),
            'description' => request()->input('description'),
            'keywords' => request()->input('keywords')
            
        ]);
        return redirect(route('adminCategory'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category,$id)
    {
        $data = Category::find($id);
        $dataList = DB::table('categories')->get(); 
        return view('admin.category_edit', [ 'data' => $data, 'dataList' => $dataList]);
    }

   
    public function update(Request $request, Category $category,$id)
    {
       $data = Category::find($id);
       $data->title = $request->input('title');
       $data->keywords = $request->input('keywords');
       $data->description = $request->input('description');
       $data->slug = $request->input('slug');
        $data->save();
        return redirect()->route('adminCategory');

    }

    public function destroy(Request $request,$id)
    {
        DB::table('categories')->where('id', '=', $id)->delete();
        return redirect()->route('adminCategory');
    }
}
