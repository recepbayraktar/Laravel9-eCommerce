<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function index()
    {
        $data = Setting::first();

        if ($data == null)
        {
            $data = new Setting();
            $data->title = 'Project Title';
            $data = Setting::first();
            $data->save();
        }
        return view('admin.setting.setting_edit', [ 'data' => $data]);
    }

    public function update(Request $request, Setting $setting)
    {
        $id = $request->input('id');
        $data = Setting::find($id);
        $data->company = request()->input('company');
        $data->title = request()->input('title');
        $data->description = request()->input('description');
        $data->address = request()->input('address');
        $data->phone = request()->input('phone');
        $data->fax = request()->input('fax');
        $data->email = request()->input('email');
        $data->keywords = request()->input('keywords');
        $data->smtpserver = request()->input('smtpserver');
        $data->smtpemail = request()->input('smtpemail');
        $data->smtppassword = request()->input('smtppassword');
        $data->smtpport = request()->input('smtpport');
        $data->facebook = request()->input('facebook');
        $data->twitter = request()->input('twitter');
        $data->instagram = request()->input('instagram');
        $data->youtube = request()->input('youtube');
        $data->aboutus = request()->input('aboutus');
        $data->contact = request()->input('contact');
        $data->references = request()->input('references');
        $data->status = request()->input('status');
        $data->save();
        return redirect()->route('adminSetting');
    }

}

