<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataList = Message::all();
        return view('admin.message.message', ['dataList' => $dataList]);
    }


    public function show(Message $message)
    {
        //
    }

    public function edit(Message $message,$id)
    {
        $data = Message::find($id);
        return view('admin.message.message_edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message,$id)
    {
        $data = Message::find($id);
        $data->name = request()->input('name');
        $data->phone = request()->input('phone');
        $data->email = request()->input('email');
        $data->subject = request()->input('subject');
        $data->note = request()->input('note');
        $data->message = request()->input('message');
        $data->save();
        return redirect()->route('adminMessage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message, $id)
    {
        DB::table('products')->where('id', '=', $id)->delete();
        return redirect()->route('adminMessage');
    }
}
