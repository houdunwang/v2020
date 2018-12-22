@extends('admin::layouts.master')
@section('content')
    <ul role="tablist" class="nav nav-tabs">
        <li class="nav-item"><a href="/base/base" class="nav-link">基本回复列表</a></li>
        <li class="nav-item"><a href="#" class="nav-link active">添加基本回复</a></li>
    </ul>
    <form action="/base/base" method="post">
        @csrf
        {!! $ruleView !!}
        <div class="card"  id="app">
            <div class="card-header">基本回复管理</div>

            <div class="card-body card-body-contrast">
                <div class="form-group row">
                    <div class="col-md-10" v-for="(v,i) in contents">
                        <textarea id="content" name="content" rows="3" class="form-control" v-model="v.content"></textarea>
                        <a href="javascript:;"><i class="fa fa-github-alt" aria-hidden="true"></i> 表情</a>
                        <button class="btn btn-secondary" type="button" @click="del(i)">删除</button>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-secondary" type="button" @click="add">添加回复条目</button>
            </div>
            <textarea name="data" hidden>@{{ contents }}</textarea>
        </div>
        <button class="btn btn-primary">保存提交</button>
    </form>
    <script>
        require(['vue', 'hdjs'], function (vue, hdjs) {
            new vue({
                el: "#app",
                data: {
                    contents: {!! old('data','[{content: ""}]') !!}
                },
                mounted() {
                    this.emotion();
                },
                updated() {
                    this.emotion();
                },
                methods: {
                    emotion() {
                        var This = this;
                        $('textarea').each(function () {
                            hdjs.emotion({
                                btn: $(this).next('a'), input: $(this), callback: function (con, btn, input) {
                                    let index = $(input).index('#app textarea');
                                    This.contents[index].content = $(input).val();
                                }
                            });
                        })
                    },
                    add() {
                        this.contents.push({content: ''})
                    },
                    del(pos) {
                        this.contents.splice(pos, 1)
                    }
                }
            })
        })
    </script>
@endsection
