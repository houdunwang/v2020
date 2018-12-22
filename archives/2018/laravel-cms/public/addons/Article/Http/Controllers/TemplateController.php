<?php

namespace Modules\Article\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Article\Services\TemplateService;

class TemplateController extends Controller
{
    public function index(TemplateService $templateService)
    {
        $templates = $templateService->all();
        return view('article::template.index', compact('templates'));
    }

    public function setDefaultTemplate($name)
    {
        \HDModule::saveConfig(['template' => $name], 'config');
        return back()->with('success', '模板设置成功');
    }
}
