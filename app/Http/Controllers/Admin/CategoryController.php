<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;


class CategoryController extends Controller
{
     protected $appends = [
         'getParentsTree'
     ];

     public function create(Request $request)
     {
         DB::table('categories')->insert([
             'slug' => request()->input('email'),
             'title' => request()->input('title'),
             'description' => request()->input('description'),
             'keywords' => request()->input('keywords'),
             'parent_id' => request()->input('parent_id')

         ]);
         return redirect(route('adminCategory'));
     }

    public static function getParentsTree($category,$title){
        if ($category->parent_id == 0) {
            return $title;
        }

        $parent = Category::find($category->parent_id);
        $title = $parent->title . ' > ' . $title;

        return CategoryController::getParentsTree($parent,$title);
    }

    public function index()
    {
        $dataList = Category::with('children')->get();

        return view('admin.category.category', ['dataList' => $dataList]);
    }

    public function add()
    {
        $dataList = Category::with('children')->get();

        return view('admin.category.category_add', ['dataList' => $dataList]);
    }

    public function edit(Category $category,$id)
    {
        $data = Category::find($id);
        $dataList = DB::table('categories')->get();
        return view('admin.category.category_edit',['data' => $data, 'dataList' =>$dataList ]);
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


