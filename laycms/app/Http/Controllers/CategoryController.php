<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Repository\CategoryRepository;
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
        $categories = $this->repository->all();
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
