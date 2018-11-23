<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('category.index', compact('categories'));
    }

    //添加界面
    public function create()
    {
        return view('category.create');
    }

    //保存数据
    public function store(CategoryRequest $request)
    {
        Category::create($request->all());
        return redirect(route('content.category.index'))->with('success', '添加成功');
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        //
    }

    public function update(Request $request, Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        //
    }
}
