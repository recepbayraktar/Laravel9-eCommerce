<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Setting;

class HomeController extends Controller
{
    public static function categoryList(){
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public function index(){

        return view(view: 'home.index');
    }

    public function aboutus(){

        return view(view: 'home.aboutus');
    }

    public function contact(){

        return view(view: 'home.contact');
    }

    public function faq(){

        return view(view: 'home.faq');
    }

    public function explore(){

        return view(view: 'home.explore');
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
