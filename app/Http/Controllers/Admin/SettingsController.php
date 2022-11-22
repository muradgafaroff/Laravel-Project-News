<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function settings(){
        return view('admin.pages.settings');
    }

    public function settingEdit(){
        return view('admin.pages.setting-edit');
    }
}
