<?php
namespace Modules\Article\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Article\Entities\Slide;
use Modules\Article\Http\Requests\SlideRequest;
class SlideController extends Controller
{
    //显示列表
    public function index()
    {
        $data = Slide::paginate(10);
        return view('article::slide.index', compact('data'));
    }

    //创建视图
    public function create(Slide $slide)
    {
        return view('article::slide.create',compact('slide'));
    }

    //保存数据
    public function store(SlideRequest $request,Slide $slide)
    {
        $slide->fill($request->all());
        $slide->save();

        return redirect('/article/slide')->with('success', '保存成功');
    }

    //显示记录
    public function show(Slide $field)
    {
        return view('article::slide.show', compact('field'));
    }

    //编辑视图
    public function edit(Slide $slide)
    {
        return view('article::slide.edit', compact('slide'));
    }

    //更新数据
    public function update(SlideRequest $request, Slide $slide)
    {
        $slide->update($request->all());
        return redirect('/article/slide')->with('success','更新成功');
    }

    //删除模型
    public function destroy(Slide $slide)
    {
        $slide->delete();
        return redirect('article/slide')->with('success','删除成功');
    }
}
