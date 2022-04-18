<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataList = Review::all();
        return view('admin.review.review', ['dataList' => $dataList]);
    }


    public function edit(Review $review,$id)
    {
        $data = Review::find($id);
        return view('admin.review.review_edit', ['data' => $data]);
    }


    public function update(Request $request, Review $review,$id)
    {
        $data = Review::find($id);
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('adminReview');
    }


    public function destroy(Review $review)
    {
        //
    }
}
