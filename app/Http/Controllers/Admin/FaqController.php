<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataList = Faq::all();

        return view('admin.faq.faq', ['dataList' => $dataList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new Faq;
        $data->question = request()->input('question');
        $data->answer = request()->input('answer');
        $data->position = request()->input('position');

        $data->save();

        return redirect(route('adminFaq'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $dataList = Faq::All();

        return view('admin.faq.faq_add',['dataList' => $dataList]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq, $id)
    {

        $data = Faq::find($id);
        return view('admin.faq.faq_edit', [ 'data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq, $id)
    {
        $data = Faq::find($id);
        $data->postion = request()->input('postion');
        $data->question = request()->input('question');
        $data->answer = request()->input('answer');
        $data->status = request()->input('status');
        $data->save();
        return redirect()->route('adminFaq');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq, $id)
    {
        DB::table('faqs')->where('id', '=', $id)->delete();
        return redirect()->route('adminFaq');
    }
}
