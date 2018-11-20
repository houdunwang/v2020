<div class="card">
    <div class="card-header border-bottom-0">
        <div>
            <ul class="nav nav-tabs nav-tabs-sm">
                <li class="nav-item">
                    <a href="{{route('edu.lesson.lists')}}" class="nav-link">
                        课程列表
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('edu.lesson.create')}}" class="nav-link  active">
                        发表课程
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="">课程标题</label>
            <input type="text" class="form-control" v-model="field.lesson.title">
        </div>
        <div class="form-group">
            <label for="">课程简介</label>
            <textarea class="form-control" v-model="field.lesson.description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label>课程图片</label>
            <div class="col-sm-12">
                <div class="input-group mb-1">
                    <input class="form-control" v-model="field.lesson.thumb" readonly="">
                    <div class="input-group-append">
                        <button @click="upImageThumb(this)" class="btn btn-secondary" type="button">单图上传</button>
                    </div>
                </div>
                <div style="display: inline-block;position: relative;">
                    <img :src="field.lesson.thumb" class="img-responsive img-thumbnail" width="150">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        视频
    </div>
    <div class="card-body">
        <div class="card" v-for="(v,k) in field.videos">
            <div class="card-body">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="课程标题" v-model="v.title">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="视频地址" v-model="v.path">
                </div>
            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-white btn-sm" type="button" @click="delVideo(k)">删除</button>
            </div>
        </div>
    </div>
    <div class="card-footer text-muted">
        <button type="button" class="btn btn-white btn-block" @click.prevent="addVideo">添加视频</button>
    </div>
</div>
<div class="text-center mb-5">
    <textarea name="field" hidden cols="30" rows="10">@{{ field }}</textarea>
    <button class="btn btn-primary">保存发布</button>
</div>
