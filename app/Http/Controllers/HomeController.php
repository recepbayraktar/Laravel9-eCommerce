<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Message;
use App\Models\Setting;
use App\Models\Product;

class HomeController extends Controller
{
    public static function categoryList(){
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public function index(){
        $setting = Setting::first();
        $slider = Product::select('title','image','price', 'id', 'slug')->limit(4)->get();

        $data= [
            'setting' => $setting,
            'slider' => $slider
        ];
        return view('home.index', $data);
    }

    public function product($id,$slug){
        $data = Product::find($id);

        exit();
    }

    public function productCatalog($id,$slug){
        $data = Product::find($id);
        return view('home.product_catalog', ['data' => $data]);
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

            return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
