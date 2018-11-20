<?php

namespace App\Http\Controllers\Edu;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function lists()
    {
        $lessons = Lesson::where('user_id', auth()->id())->paginate(10);
        return view('edu.lesson_lists', compact('lessons'));
    }

    public function index()
    {
        $lessons = Lesson::paginate(1);
        return view('edu.lesson_index',compact('lessons'));
    }

    public function create()
    {
        $field = [
            'lesson' => [
                'title' => '',
                'description' => '',
                'thumb' => asset('org/hdjs/image/nopic.jpg'),
            ],
            'videos' => [],
        ];
        return view('edu.lesson_create', compact('field'));
    }

    protected function validation($data)
    {
        \Validator::make($data, [
            'title' => 'required',
            'thumb' => 'required',
            'description' => 'required',
        ], [
            'title.required' => '课程名称不能为空',
            'thumb.required' => '课程图片不能为空',
            'description.required' => '课程介绍不能为空',
        ])->validate();
    }

    public function store(Request $request)
    {
        $field = json_decode($request->get('field'), true);
        $this->validation($field['lesson']);
        //添加课程
        $lesson = new Lesson($field['lesson']);
        $lesson->user()->associate(auth()->user());
        $lesson->save();

        //添加视频
        $lesson->video()->createMany($field['videos']);
        return redirect(route('edu.lesson.lists'))->with('success', '课程添加成功');
    }

    public function show(Lesson $lesson)
    {
        return view('edu.lesson_show',compact('lesson'));
    }

    public function edit(Lesson $lesson)
    {
        $field = ['lesson' => $lesson->toArray(), 'videos' => $lesson->video->toArray()];
        return view('edu.lesson_edit', compact('lesson', 'field'));
    }

    public function update(Request $request, Lesson $lesson)
    {
        $this->authorize('update', $lesson);
        $field = json_decode($request->get('field'), true);
        $this->validation($field['lesson']);
        $lesson->user()->associate(auth()->user())->update($field['lesson']);

        //视频添加
        $lesson->video()->delete();
        foreach ($field['videos'] as $video) {
            $lesson->video()->withTrashed()->updateOrCreate(['id' => $video['id'] ?? 0], $video)->restore();
        }
        return redirect(route('edu.lesson.lists'))->with('success', '修改成功');
    }


    public function destroy(Lesson $lesson)
    {
        $this->authorize('delete', $lesson);
        $lesson->video()->withTrashed()->forceDelete();
        $lesson->delete();
        return redirect(route('edu.lesson.lists'))->with('success', '删除成功');
    }
}
