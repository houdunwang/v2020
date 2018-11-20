<?php

namespace App\Http\Controllers\Edu;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categorys = Category::get();
        return view('edu.category_index', compact('categorys'));
    }

    public function create()
    {
        return view('edu.category_create');
    }

    public function store(CategoryRequest $request)
    {
        Category::create($request->all());
        return redirect(route('edu.category.index'))->with('success', '操作成功');
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('edu.category_edit',compact('category'));
    }


    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->all());
        return redirect(route('edu.category.index'))->with('success', '操作成功');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('success','删除成功');
    }
}
