<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Repository\CategoryRepository;
use Houdunwang\Arr\Arr;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //仓库
    protected $repository;

    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $categories = $this->repository->tree();
        return view('category.index', compact('categories'));
    }

    //添加界面
    public function create()
    {
        $categories = $this->repository->tree();
        return view('category.create', compact('categories'));
    }

    //保存数据
    public function store(CategoryRequest $request)
    {
        $this->repository->create($request->all());
        //闪存
        return redirect(route('content.category.index'))->with('success', '添加成功');
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        $categories = $this->repository->tree($category);
        return view('category.edit', compact('category', 'categories'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $this->repository->update($category, $request->all());
        return redirect(route('content.category.index'))->with('success', '更新成功');
    }

    public function destroy(Category $category)
    {
        //
    }
}
