<div class="card">
    <div class="card-header">
        <div class=""><span class="fe fe-user"></span> 个人资料</div>
    </div>
    <div class="card-body">
        <div class="nav flex-column nav-pills small" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link {{active_class(if_query('type','icon'),'active','text-muted')}}"
               href="{{route('member.user.edit',[auth()->user(),'type'=>'icon'])}}">头像设置</a>
            <a class="nav-link {{active_class(if_query('type','info'),'active','text-muted')}}"
               href="{{route('member.user.edit',[auth()->user(),'type'=>'info'])}}">个人信息</a>
            <a class="nav-link {{active_class(if_query('type','password'),'active','text-muted')}}"
               href="{{route('member.user.edit',[auth()->user(),'type'=>'password'])}}">修改密码</a>
        </div>
    </div>
</div>
