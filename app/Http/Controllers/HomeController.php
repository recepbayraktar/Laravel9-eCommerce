<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
/* use App\Http\Livewire\Review; */
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Image;
use App\Models\Message;
use App\Models\Setting;
use App\Models\Product;
use App\Models\Review;
use App\Models\Faq;

class HomeController extends Controller
{
    public static function categoryList(){
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public function categoryProducts($id,$slug){
        $dataList = Product::where('category_id',$id)->get();
        $data = Category::find($id);
        return view('home.category_products',['dataList' => $dataList, 'data' => $data]);
    }


    public function index(){
        $all = Product::all();
        $setting = Setting::first();
        $slider = Product::select('title','image','price')->limit(4)->get();
        $daily = Product::select('title','image','price')->limit(4)->inRandomOrder()->get();
        $last = Product::select('title','image','price')->limit(4)->orderByDesc('id')->get();
        $dataList = ['setting' => $setting, 'slider' => $slider, 'daily' => $daily, 'last' => $last, 'all' => $all];
        return view('home.index',$dataList);
    }

    public function aboutus(){

        return view(view: 'home.aboutus');
    }

    public function addToCart($id){

        echo "recep";
        $data = Product::find($id);
        print_r($data);
        exit();
    }

    public function product($id,$slug){

        $dataList = Image::where('product_id', $id)->get();
        $data = Product::find($id);
        $reviews = Review::where('product_id', $id)->get();
         return view('home.product_detail', ['data' => $data, 'dataList' => $dataList, 'reviews' => $reviews]);
    }

    public function getProduct(Request $request)
    {
        $search = $request->input('search');
        $count = Product::where('title', 'like' , '%' . $search . '%')->get()->count();



        if ($count == 1) {
            $data = Product::where('title', 'like' , '%' . $search . '%')->first();
            return redirect()->route('product', ['id' => $data->id, 'slug' => $data->slug]);
        }
        else {
            return redirect()->route('productList', ['search' => $search]);
        }
    }

    public static function countReview($id){
        return Review::where('product_id', $id)->count();
    }

    public static function avgreview($id){
        return Review::where('product_id', $id)->average('rate');
    }

    public function productList($search){

        $dataList = Product::where('title', 'like' , '%' . $search . '%')->get();

        return view('home.search_products', ['search' => $search, 'dataList' => $dataList]);
    }

    public function contact(){

        return view(view: 'home.contact');
    }

    public function faq(){

        $data = Faq::all()->sortByDesc('position');

        return view('home.faq', ['data' => $data]);
    }

    public function explore(){

        return view(view: 'home.explore');
    }

    public function sendMessage(Request $request){

        $data = new Message();

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->note = $request->input('note');

        $data->save();
        return redirect()->route('contact');
    }

    public static function getSetting(){
        return Setting::first();
    }

    public function login(){
        return view(view:'home.login');
    }

    public function loginCheck(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email','password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('home');
            }

            return redirect()->intended('home')->withErrors(['email' => 'The provided credentials do not match our records.']);
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
