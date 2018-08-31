<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper">
        <a href="#" class="left-sidebar-toggle">网站首页</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        <li class="divider">系统模块</li>
                        <li class="active"><a href="/"><i class="icon mdi mdi-home"></i><span>网站首页</span></a>
                        </li>
                        <li class="parent "><a href="#"><i class="icon mdi mdi-border-all"></i><span>系统管理</span></a>
                            <ul class="sub-menu">
                                <li><a href="{{route('config.edit',['name'=>'site'])}}">网站配置</a></li>
                                <li><a href="{{route('config.edit',['name'=>'mail'])}}">邮箱配置</a></li>
                                <li><a href="{{route('config.edit',['name'=>'upload'])}}">上传配置</a></li>
                                <li><a href="{{route('config.edit',['name'=>'aliyun'])}}">阿里云</a></li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>文章系统</span></a>
                            <ul class="sub-menu">
                                <li><a href="ui-typography.html">Typography</a>
                                </li>
                            </ul>
                        </li>

                        <li class="parent"><a href="#"><i class="icon mdi mdi-dot-circle"></i><span>会员粉丝</span></a>
                            <ul class="sub-menu">
                                <li><a href="form-upload.html">Multi Upload</a>
                                </li>
                            </ul>
                        </li>

                        <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>模块管理</span></a>
                            <ul class="sub-menu">
                                <li><a href="pages-blank.html">Blank Page</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent"><a href="charts.html">
                                <i class="icon mdi mdi-chart-donut"></i><span>微信公众号</span></a>
                            <ul class="sub-menu">
                                <li><a href="charts-flot.html">Flot</a>
                                </li>
                            </ul>
                        </li>
                        <li class="divider">扩展模块</li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-inbox"></i><span>Email</span></a>
                            <ul class="sub-menu">
                                <li><a href="email-inbox.html">Inbox</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="progress-widget">
            <div class="progress-data">
                <span class="name">技术支持</span>
                <a href="http://houdunren.com" target="_blank">houdunren.com</a>
            </div>
        </div>
    </div>
</div>
@push('js')
    <script>
        require(['jquery'], function ($) {
            $('.parent').click(function(){
                $('.parent').removeClass('open');
                $(this).addClass('open')
            })
        })
    </script>
@endpush
