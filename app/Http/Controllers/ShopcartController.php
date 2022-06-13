<?php

namespace App\Http\Controllers;

use App\Models\Shopcart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;


class ShopcartController extends Controller
{


    public static function countShopcart(){
        return Shopcart::where('user_id', Auth::id())->count();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataList = Shopcart::where('user_id', Auth::id())->get();

        return view('home.user_shopcart' ,['dataList' => $dataList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request, $id)
    {

        $data = Shopcart::where('product_id', $id)->where('user_id', Auth::id())->first();
        if($data){
            $data->quantity = $data->quantity + $request->input('quantity');
        }
        else{
            $data = new Shopcart;
            $data->quantity = request()->input('quantity');
            $data->user_id = Auth::id();
            $data->product_id =  $id;
        }
        $data->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function show(Shopcart $shopcart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function edit(Shopcart $shopcart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shopcart $shopcart, $id)
    {
        $data = Shopcart::find($id);
        $data->quantity = $request->input('quantity');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shopcart $shopcart, $id)
    {
         $data = $shopcart::find($id);
         $data->delete();
         return redirect()->back();
    }
}
