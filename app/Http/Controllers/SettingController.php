<?php

namespace App\Http\Controllers;
use Setting;
use Illuminate\Http\Request;
use App\Http\Requests\SettingRequest;

class SettingController extends Controller
{
    public function index()
    {
    	return view('admin/setting/setting');
    }

    public function store(SettingRequest $request)
    {

    }
}

