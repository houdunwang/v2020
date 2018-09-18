@extends('edu.layouts.master')
@section("content")
    <form action="{{route('edu.article.store')}}" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="card col-sm-10">
                <div class="card-header">
                    发表文章
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="请输入文章标题" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <div id="editormd">
                            <textarea style="display:none;" name="content"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <button class="btn btn-primary">保存发布</button>
                </div>
            </div>
        </div>
    </form>
@endsection
@push('js')
    <script>
        require(['hdjs'], function (hdjs) {
            hdjs.editormd("editormd", {
                width: '100%',
                height: 300,
                toolbarIcons: function () {
                    return [
                        "bold", "del", "italic", "quote", "|",
                        "list-ul", "list-ol", "hr", "|",
                        "link", "hdimage", "code-block", "|",
                        "watch", "preview", "fullscreen"
                    ]
                },
                //editor.md库位置
                path: "{{asset('org/hdjs')}}/package/editor.md/lib/"
            });
        });
    </script>
@endpush
