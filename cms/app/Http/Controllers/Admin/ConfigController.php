<?php

namespace App\Http\Controllers\Admin;

use App\Services\ConfigServer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    public function edit($name, ConfigServer $configServer)
    {
        $config = $configServer->get($name);
        return view('config.' . $name, compact('config'));
    }

    public function update($name, Request $request, ConfigServer $configServer)
    {
        $configServer->save($name, $request->all());
        return back()->with('success', '保存成功');
    }
}
