<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Setting;

class SettingController extends Controller
{
    public function view()
    {
        $settings = Setting::first();
        return view('admin.settings.index')->with(compact('settings'));
    }

    public function update(request $post)
    {
        $response = Setting::update_record($post);
        return $response;
    }    
}