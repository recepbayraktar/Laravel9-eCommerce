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
        $id = Setting::first()['id'];
       return Controller::insert(new Setting, route("adminSetting"),$id);
    }

}

