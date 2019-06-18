<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>houdunren</title>
    <meta name="csrf-token" content="yTXCJ7BKLhjYF4FHtxGRg7bwbgz3ry0hgCjhvnbv">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="shortcut icon" href="https://www.houdunren.com/favicon.ico" type="image/x-icon"/>
<link href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/app.css?id=bad655acdb15b2d2934e">
<script>
    window.hdjs = {
        base: '/js/hdjs',
        uploader: 'https://www.houdunren.com/member/upload?sid=1&',
        filesLists: 'https://www.houdunren.com/member/upload/lists?sid=1&',
    };
    window.system = {
        message_timeout: 60,
        upload:{"type":"aliyun","image_size":"200000000","file_size":"200000000","extension":"jpg,jpeg,gif,png,zip,rar,doc,txt,pem,json"},
    };
    window.sid = 1;
    window.user_id = 0
</script>
<script src="https://www.houdunren.com/js/hdjs/require.js"></script>
<script src="https://www.houdunren.com/js/hdjs/config.js"></script>
<script src="/js/util.js?id=5a6865d8976f986b01a3"></script>
<script> require(['bootstrap']); </script>
<script>
    require(['bootstrap'], function () {
        $(function () {
            $('[data-toggle="popover"]').popover({
                trigger: 'hover'
            })
        });
    });
</script>
        <link rel="stylesheet" href="https://www.houdunren.com/modules/edu/css/app.css?v=11552107">
</head>
<body class="edu">
<div class="border-bottom border-info header shadow">
    <div class="bg-white border-gray pb-2 pt-2 shadow-sm font-weight-bold">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white pl-0">
                <a class="mr-5 text-info navbar-brand font-weight-bold" href="/">
                    <i class="fa fa-flag"></i> houdunren
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-lg-0">
                        <li class="nav-item dropdown mr-3">
                            <a class="nav-link "
                                href="https://www.houdunren.com/edu/front/system?sid=1&amp;mid=2">课程</a>
                            
                            
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link "
                        href="https://www.houdunren.com/edu/front/lesson?sid=1&amp;mid=2">项目</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link " href="https://www.houdunren.com/edu/front/subscribe">订阅</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link "
                        href="https://www.houdunren.com/edu/front/topic">话题</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link " href="https://www.houdunren.com/edu/front/sign">签到</a>
                </li>
                                <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        文档
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                        <a class="dropdown-item" href="https://www.houdunren.com/document/front/article/1">
                            HDCMS
                        </a>
                        <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="https://www.houdunren.com/document/front/article/5">
                            Laravel扩展包开发
                        </a>
                        <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="https://www.houdunren.com/document/front/article/6">
                            Git版本控制
                        </a>
                        <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="https://www.houdunren.com/document/front/article/7">
                            Homestead开发环境
                        </a>
                        <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="https://www.houdunren.com/document/front/article/8">
                            API接口开发
                        </a>
                        <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="https://www.houdunren.com/document/front/article/9">
                            PHPSTORM高效编辑器
                        </a>
                        <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="https://www.houdunren.com/document/front/article/100">
                            Laravel5.8
                        </a>
                        <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="https://www.houdunren.com/document/front/article/103">
                            vscode编辑器使用
                        </a>
                        <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="https://www.houdunren.com/document/front/article/104">
                            HDJS组件库
                        </a>
                        <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="https://www.houdunren.com/document/front/article/105">
                            微信开发框架
                        </a>
                        <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="https://www.houdunren.com/document/front/article/107">
                            Docker
                        </a>
                        <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="https://www.houdunren.com/document/front/article/108">
                            Linux
                        </a>
                        <div class="dropdown-divider"></div>
                                            </div>
                </li>
                                <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        其他
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://www.houdunren.com/edu/front/video?sid=1&amp;mid=2">更新列表</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="https://www.houdunren.com/edu/front/blog?sid=1&amp;mid=2">视频日记</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="https://www.houdunren.com/edu/front/live">八点直播</a>
                    </div>
                </li>
                </ul>
                                                <div class="form-inline my-2 my-lg-0">
                    <a href="https://www.houdunren.com/reg" class="btn btn-outline-info btn-sm my-2 my-sm-0 mr-1">注册</a>
                    <a href="https://www.houdunren.com/login" class="btn btn-info btn-sm my-2 my-sm-0">登录</a>
                </div>
                        </div>
        </nav>
    </div>
</div>
</div>
<div class="home mb-3">
            <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-9 mb-2 bg-white shadow-sm border-gray border rounded">
                <div class="p-3 pb-3">
                    <h6 class="border-bottom pb-4 pt-3">
                        社区动态
                        <a href="https://www.houdunren.com/edu/front/topic/create"
                           class="btn btn-outline-secondary btn-sm float-right">
                            发表
                        </a>
                    </h6>
                    
                                            <div class="border-bottom border-gray mb-3">
                            <div class="media text-muted pt-1">
                                <a href="https://www.houdunren.com/user/11977">
                                    <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/119771558968238.gif"
                                         class="avatar rounded mt-1">
                                </a>
                                <div class="media-body pb-3 mb-0 small lh-125 pl-3">
                                    <h6 class="">
                                        <a href="https://www.houdunren.com/edu/front/topic/162"
                                           class="topic-title pb-2 d-inline-block activity-title font-size-15">
                                            《新人请走进这个小屋来，有点事要和你说》
                                        </a>
                                    </h6>
                                    <div>
                                        <span class="small font-weight-light">
                                            于 1天前
                                        </span> .
                                        <span class="small font-weight-light">
                                            评论 31
                                        </span> .
                                        <span class="small font-weight-light">
                                            点赞 87
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                                        <div class="border-bottom border-gray mb-3">
        <div class="media text-muted pt-1">
            <a href="https://www.houdunren.com/user/1">
                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/11559737304.png"
                     class="avatar rounded mt-1">
            </a>
            <div class="media-body pb-3 mb-0 small lh-125 pl-3">
                <h6 class="">
                    <a href="https://www.houdunren.com/edu/front/topic/717"
                       class="topic-title pb-2 d-inline-block activity-title font-size-15">
                        发表了贴子
                        《开发docker的LAMP镜像》
                    </a>
                </h6>
                <div>
                    <span class="badge badge-info font-weight-light">文章</span>
                    <span class="small font-weight-light">
                    发表
                        于 29秒前
                    </span> .
                    <span class="small font-weight-light">
                        评论 0
                    </span> .
                    <span class="small font-weight-light">
                        点赞 0
                    </span>
                </div>
            </div>
        </div>
    </div>
                                        <div class="border-bottom border-gray mb-3 comment-markdown">
        <div class="media text-muted pt-1">
            <a href="https://www.houdunren.com/user/22014">
                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/220141558579001.JPG" class="avatar rounded mt-1">
            </a>
            <div class="media-body pb-3 mb-0 small lh-125 pl-3">
                <h6 class="">
                    <a href="https://www.houdunren.com/edu/front/sign">
                        完成签到 签到签到签到签到
                    </a>
                </h6>
                <div>
                    <span class="badge badge-success font-weight-light">签到</span>
                    <span class="small font-weight-light">
                        发表于 3小时前
                    </span> .
                </div>
            </div>
        </div>
    </div>
                                            <div class="border-bottom border-gray mb-3 comment-markdown">
        <div class="media text-muted pt-1">
            <a href="https://www.houdunren.com/user/22288">
                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/222881560151224.jpg" class="avatar rounded mt-1">
            </a>
            <div class="media-body pb-3 mb-0 small lh-125 pl-3">
                <h6 class="">
                    <a href="https://www.houdunren.com/edu/front/sign">
                        完成签到 开始啦！！！
                    </a>
                </h6>
                <div>
                    <span class="badge badge-success font-weight-light">签到</span>
                    <span class="small font-weight-light">
                        发表于 4小时前
                    </span> .
                </div>
            </div>
        </div>
    </div>
                                        <div class="border-bottom border-gray mb-3">
        <div class="media text-muted pt-1">
            <a href="https://www.houdunren.com/user/8457">
                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/84571554810274.png"
                     class="avatar rounded mt-1">
            </a>
            <div class="media-body pb-3 mb-0 small lh-125 pl-3">
                <h6 class="">
                    <a href="https://www.houdunren.com/edu/front/exam/12312"
                       class="topic-title pb-2 d-inline-block activity-title font-size-15">
                        参加了 《优秀的开发编辑器推荐》的考试，成绩是0分
                    </a>
                </h6>
                <div>
                    <span class="badge badge-info font-weight-light">考试</span>
                    <span class="small font-weight-light">
                    发表
                        于 4小时前
                    </span> .
                </div>
            </div>
        </div>
    </div>
                                        <div class="border-bottom border-gray mb-3 comment-markdown">
        <div class="media text-muted pt-1">
            <a href="https://www.houdunren.com/user/9040">
                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/90401553529790.jpeg" class="avatar rounded mt-1">
            </a>
            <div class="media-body pb-3 mb-0 small lh-125 pl-3">
                <h6 class="">
                    <a href="https://www.houdunren.com/edu/front/sign">
                        完成签到 新的一天开始了
                    </a>
                </h6>
                <div>
                    <span class="badge badge-success font-weight-light">签到</span>
                    <span class="small font-weight-light">
                        发表于 6小时前
                    </span> .
                </div>
            </div>
        </div>
    </div>
                                        <div class="border-bottom border-gray mb-3 comment-markdown">
        <div class="media text-muted pt-1">
            <a href="https://www.houdunren.com/user/22104">
                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/221041559098473.jpg" class="avatar rounded mt-1">
            </a>
            <div class="media-body pb-3 mb-0 small lh-125 pl-3">
                <h6 class="">
                    <a href="https://www.houdunren.com/edu/front/sign">
                        完成签到 又是新的一天.加油
                    </a>
                </h6>
                <div>
                    <span class="badge badge-success font-weight-light">签到</span>
                    <span class="small font-weight-light">
                        发表于 9小时前
                    </span> .
                </div>
            </div>
        </div>
    </div>
                                        <div class="border-bottom border-gray mb-3 comment-markdown">
        <div class="media text-muted pt-1">
            <a href="https://www.houdunren.com/user/9140">
                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/91401554783250.jpg" class="avatar rounded mt-1">
            </a>
            <div class="media-body pb-3 mb-0 small lh-125 pl-3">
                <h6 class="">
                    <a href="https://www.houdunren.com/edu/front/sign">
                        完成签到 新的一天，加油
                    </a>
                </h6>
                <div>
                    <span class="badge badge-success font-weight-light">签到</span>
                    <span class="small font-weight-light">
                        发表于 9小时前
                    </span> .
                </div>
            </div>
        </div>
    </div>
                                        <div class="border-bottom border-gray mb-3 comment-markdown">
        <div class="media text-muted pt-1">
            <a href="https://www.houdunren.com/user/8143">
                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/81431553276830.jpg" class="avatar rounded mt-1">
            </a>
            <div class="media-body pb-3 mb-0 small lh-125 pl-3">
                <h6 class="">
                    <a href="https://www.houdunren.com/edu/front/sign">
                        完成签到 laravel中学篇哪里去了?
                    </a>
                </h6>
                <div>
                    <span class="badge badge-success font-weight-light">签到</span>
                    <span class="small font-weight-light">
                        发表于 9小时前
                    </span> .
                </div>
            </div>
        </div>
    </div>
                                        <div class="border-bottom border-gray mb-3 comment-markdown">
        <div class="media text-muted pt-1">
            <a href="https://www.houdunren.com/user/1">
                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/11559737304.png" class="avatar rounded mt-1">
            </a>
            <div class="media-body pb-3 mb-0 small lh-125 pl-3">
                <h6 class="">
                    <a href="https://www.houdunren.com/edu/front/video/12435#1336">
                        发表评论 苹果系统即将发布的新版本 也要用zsh 了
                    </a>
                </h6>
                <div>
                    <span class="badge badge-success font-weight-light">评论</span>
                    <span class="small font-weight-light">
                        发表于 10小时前
                    </span> .
                </div>
            </div>
        </div>
    </div>
                                        <div class="border-bottom border-gray mb-3">
        <div class="media text-muted pt-1">
            <a href="https://www.houdunren.com/user/591">
                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/7014dc2af47af16cf2a4adc8ed3b820c1542534872.jpg"
                     class="avatar rounded mt-1">
            </a>
            <div class="media-body pb-3 mb-0 small lh-125 pl-3">
                <h6 class="">
                    <a href="https://www.houdunren.com/edu/front/topic/715"
                       class="topic-title pb-2 d-inline-block activity-title font-size-15">
                        发表了贴子
                        《求助老师，windows server2008 服务器上执行exec(&quot;git pull&quot;)或者exec(&quot;git push&quot;)直接一直卡住页面，但是在本地wi...》
                    </a>
                </h6>
                <div>
                    <span class="badge badge-info font-weight-light">文章</span>
                    <span class="small font-weight-light">
                    发表
                        于 10小时前
                    </span> .
                    <span class="small font-weight-light">
                        评论 0
                    </span> .
                    <span class="small font-weight-light">
                        点赞 0
                    </span>
                </div>
            </div>
        </div>
    </div>
                                        <div class="border-bottom border-gray mb-3 comment-markdown">
        <div class="media text-muted pt-1">
            <a href="https://www.houdunren.com/user/18666">
                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/186661553398192.jpg" class="avatar rounded mt-1">
            </a>
            <div class="media-body pb-3 mb-0 small lh-125 pl-3">
                <h6 class="">
                    <a href="https://www.houdunren.com/edu/front/sign">
                        完成签到 。。。。。。。
                    </a>
                </h6>
                <div>
                    <span class="badge badge-success font-weight-light">签到</span>
                    <span class="small font-weight-light">
                        发表于 10小时前
                    </span> .
                </div>
            </div>
        </div>
    </div>
                                        <div class="border-bottom border-gray mb-3 comment-markdown">
        <div class="media text-muted pt-1">
            <a href="https://www.houdunren.com/user/1377">
                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/13771552958498.jpg" class="avatar rounded mt-1">
            </a>
            <div class="media-body pb-3 mb-0 small lh-125 pl-3">
                <h6 class="">
                    <a href="https://www.houdunren.com/edu/front/sign">
                        完成签到 假后上班第二天了，昨天太忙，忘了签到
                    </a>
                </h6>
                <div>
                    <span class="badge badge-success font-weight-light">签到</span>
                    <span class="small font-weight-light">
                        发表于 10小时前
                    </span> .
                </div>
            </div>
        </div>
    </div>
                                        <div class="border-bottom border-gray mb-3 comment-markdown">
        <div class="media text-muted pt-1">
            <a href="https://www.houdunren.com/user/7976">
                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/79761552834845.jpg" class="avatar rounded mt-1">
            </a>
            <div class="media-body pb-3 mb-0 small lh-125 pl-3">
                <h6 class="">
                    <a href="https://www.houdunren.com/edu/front/sign">
                        完成签到 加油每一天
                    </a>
                </h6>
                <div>
                    <span class="badge badge-success font-weight-light">签到</span>
                    <span class="small font-weight-light">
                        发表于 10小时前
                    </span> .
                </div>
            </div>
        </div>
    </div>
                                        <div class="border-bottom border-gray mb-3 comment-markdown">
        <div class="media text-muted pt-1">
            <a href="https://www.houdunren.com/user/17601">
                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/c37ec0dbe41f96908b2cccac1c2be45e1544263819.jpg" class="avatar rounded mt-1">
            </a>
            <div class="media-body pb-3 mb-0 small lh-125 pl-3">
                <h6 class="">
                    <a href="https://www.houdunren.com/edu/front/sign">
                        完成签到 坚持学习！
                    </a>
                </h6>
                <div>
                    <span class="badge badge-success font-weight-light">签到</span>
                    <span class="small font-weight-light">
                        发表于 12小时前
                    </span> .
                </div>
            </div>
        </div>
    </div>
                <div class="mt-4">
    <ul class="pagination" role="navigation">
        
                    <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; 上一页">
                <span class="page-link" aria-hidden="true">&lsaquo;</span>
            </li>
        
        
                    
            
            
                                                                        <li class="page-item active" aria-current="page"><span class="page-link bg-info border-info">1</span></li>
                                                                                <li class="page-item"><a class="page-link text-info" href="https://www.houdunren.com?page=2">2</a></li>
                                                                                <li class="page-item"><a class="page-link text-info" href="https://www.houdunren.com?page=3">3</a></li>
                                                                                <li class="page-item"><a class="page-link text-info" href="https://www.houdunren.com?page=4">4</a></li>
                                                                    
                            <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
            
            
                                
            
            
                                                                        <li class="page-item"><a class="page-link text-info" href="https://www.houdunren.com?page=415">415</a></li>
                                                                                <li class="page-item"><a class="page-link text-info" href="https://www.houdunren.com?page=416">416</a></li>
                                                        
        
                    <li class="page-item">
                <a class="page-link text-info" href="https://www.houdunren.com?page=2" rel="next" aria-label="下一页 &raquo;">&rsaquo;</a>
            </li>
            </ul>

</div>                </div>
            </div>
            <div class="col-sm-3 col-12 pl-sm-2 p-0">
                <div class="card rounded shadow-sm mb-2">
    <div class="card-header bg-white">
        <i class="fa fa-check-circle-o"></i> 社区小贴
    </div>
    <div class="card-body">
        后盾人是一个主张友好、分享、自由的技术交流社区。
    </div>
    <div class="card-footer text-muted bg-white text-center">
        <div class="d-flex justify-content-between">
            <a href="https://www.houdunren.com/edu/front/topic/create" class="btn btn-outline-success btn-sm flex-fill">
                <i class="fa fa-pencil-square-o"></i> 发贴交流
            </a>
            <a href="https://www.houdunren.com/edu/front/sign" class="btn btn-outline-danger btn-sm flex-fill ml-2">
                <i class="fa fa-flag-o"></i> 签到打卡
            </a>
        </div>
    </div>
</div>                
                <div class="card rounded shadow-sm mb-2 component-learn">
    <div class="card-header bg-white">
        <i class="fa fa-user-o"></i> 学习动态
    </div>
    <div class="card-body p-0">
        <div class="list-group list-group-flush">
                            <div class="list-group-item ">
                    <div class="row">
                        <div class="col-sm-3 col-3 pr-0">
                            <a href="https://www.houdunren.com/user/21530">
                                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/215301556278564.jpg"
                                     class="avatar rounded-circle img-thumbnail"
                                     alt="Mr_明天">
                            </a>
                        </div>
                        <div class="col-sm-9 col-9 pl-0">
                            <a href="https://www.houdunren.com/edu/front/video/7106"
                               class=" d-flex justify-content-between d-block mb-1">
                                <span class="title d-block">Centos 6.4安装讲解</span>
                            </a>
                            <div class="small text-black-50">
                                Mr_明天 <i class="fa fa-clock-o"></i> 25秒前
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="list-group-item ">
                    <div class="row">
                        <div class="col-sm-3 col-3 pr-0">
                            <a href="https://www.houdunren.com/user/19369">
                                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/193691560164603.jpg"
                                     class="avatar rounded-circle img-thumbnail"
                                     alt="haiying_one">
                            </a>
                        </div>
                        <div class="col-sm-9 col-9 pl-0">
                            <a href="https://www.houdunren.com/edu/front/video/11433"
                               class=" d-flex justify-content-between d-block mb-1">
                                <span class="title d-block">.微信JSSDK开发之上传和下载图片</span>
                            </a>
                            <div class="small text-black-50">
                                haiying_one <i class="fa fa-clock-o"></i> 6分钟前
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="list-group-item ">
                    <div class="row">
                        <div class="col-sm-3 col-3 pr-0">
                            <a href="https://www.houdunren.com/user/19369">
                                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/193691560164603.jpg"
                                     class="avatar rounded-circle img-thumbnail"
                                     alt="haiying_one">
                            </a>
                        </div>
                        <div class="col-sm-9 col-9 pl-0">
                            <a href="https://www.houdunren.com/edu/front/video/11417"
                               class=" d-flex justify-content-between d-block mb-1">
                                <span class="title d-block">.微信JSSDK开发之分享到微信朋友圈</span>
                            </a>
                            <div class="small text-black-50">
                                haiying_one <i class="fa fa-clock-o"></i> 13分钟前
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="list-group-item ">
                    <div class="row">
                        <div class="col-sm-3 col-3 pr-0">
                            <a href="https://www.houdunren.com/user/19369">
                                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/193691560164603.jpg"
                                     class="avatar rounded-circle img-thumbnail"
                                     alt="haiying_one">
                            </a>
                        </div>
                        <div class="col-sm-9 col-9 pl-0">
                            <a href="https://www.houdunren.com/edu/front/video/11410"
                               class=" d-flex justify-content-between d-block mb-1">
                                <span class="title d-block">.微信JSSDK开发之绑定安全域名</span>
                            </a>
                            <div class="small text-black-50">
                                haiying_one <i class="fa fa-clock-o"></i> 23分钟前
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="list-group-item ">
                    <div class="row">
                        <div class="col-sm-3 col-3 pr-0">
                            <a href="https://www.houdunren.com/user/19369">
                                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/193691560164603.jpg"
                                     class="avatar rounded-circle img-thumbnail"
                                     alt="haiying_one">
                            </a>
                        </div>
                        <div class="col-sm-9 col-9 pl-0">
                            <a href="https://www.houdunren.com/edu/front/video/11409"
                               class=" d-flex justify-content-between d-block mb-1">
                                <span class="title d-block">.微信JSSDK开发之课程介绍</span>
                            </a>
                            <div class="small text-black-50">
                                haiying_one <i class="fa fa-clock-o"></i> 28分钟前
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="list-group-item ">
                    <div class="row">
                        <div class="col-sm-3 col-3 pr-0">
                            <a href="https://www.houdunren.com/user/19351">
                                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/193511554876913.jpg"
                                     class="avatar rounded-circle img-thumbnail"
                                     alt="阿兵">
                            </a>
                        </div>
                        <div class="col-sm-9 col-9 pl-0">
                            <a href="https://www.houdunren.com/edu/front/video/11324"
                               class=" d-flex justify-content-between d-block mb-1">
                                <span class="title d-block">[向军大叔]WAMP是最适合新手使用的功能丰富的集成环境</span>
                            </a>
                            <div class="small text-black-50">
                                阿兵 <i class="fa fa-clock-o"></i> 49分钟前
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="list-group-item ">
                    <div class="row">
                        <div class="col-sm-3 col-3 pr-0">
                            <a href="https://www.houdunren.com/user/19351">
                                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/193511554876913.jpg"
                                     class="avatar rounded-circle img-thumbnail"
                                     alt="阿兵">
                            </a>
                        </div>
                        <div class="col-sm-9 col-9 pl-0">
                            <a href="https://www.houdunren.com/edu/front/video/12465"
                               class=" d-flex justify-content-between d-block mb-1">
                                <span class="title d-block">[docker] 下载安装容器内部软件</span>
                            </a>
                            <div class="small text-black-50">
                                阿兵 <i class="fa fa-clock-o"></i> 52分钟前
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="list-group-item ">
                    <div class="row">
                        <div class="col-sm-3 col-3 pr-0">
                            <a href="https://www.houdunren.com/user/14245">
                                <img src="https://houdunren.oss-cn-hangzhou.aliyuncs.com/15348431002de40238.jpg"
                                     class="avatar rounded-circle img-thumbnail"
                                     alt="秒速五センチ">
                            </a>
                        </div>
                        <div class="col-sm-9 col-9 pl-0">
                            <a href="https://www.houdunren.com/edu/front/video/12445"
                               class=" d-flex justify-content-between d-block mb-1">
                                <span class="title d-block">如何增加电池寿命与节能设置</span>
                            </a>
                            <div class="small text-black-50">
                                秒速五センチ <i class="fa fa-clock-o"></i> 52分钟前
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="list-group-item ">
                    <div class="row">
                        <div class="col-sm-3 col-3 pr-0">
                            <a href="https://www.houdunren.com/user/16649">
                                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/166491552887490.gif"
                                     class="avatar rounded-circle img-thumbnail"
                                     alt="92期 李小龙">
                            </a>
                        </div>
                        <div class="col-sm-9 col-9 pl-0">
                            <a href="https://www.houdunren.com/edu/front/video/12473"
                               class=" d-flex justify-content-between d-block mb-1">
                                <span class="title d-block">[docker]  发布镜像到docker仓库</span>
                            </a>
                            <div class="small text-black-50">
                                92期 李小龙 <i class="fa fa-clock-o"></i> 1小时前
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="list-group-item ">
                    <div class="row">
                        <div class="col-sm-3 col-3 pr-0">
                            <a href="https://www.houdunren.com/user/16649">
                                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/166491552887490.gif"
                                     class="avatar rounded-circle img-thumbnail"
                                     alt="92期 李小龙">
                            </a>
                        </div>
                        <div class="col-sm-9 col-9 pl-0">
                            <a href="https://www.houdunren.com/edu/front/video/12472"
                               class=" d-flex justify-content-between d-block mb-1">
                                <span class="title d-block">[docker]  容器自动运行shell脚本</span>
                            </a>
                            <div class="small text-black-50">
                                92期 李小龙 <i class="fa fa-clock-o"></i> 1小时前
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="list-group-item ">
                    <div class="row">
                        <div class="col-sm-3 col-3 pr-0">
                            <a href="https://www.houdunren.com/user/16649">
                                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/166491552887490.gif"
                                     class="avatar rounded-circle img-thumbnail"
                                     alt="92期 李小龙">
                            </a>
                        </div>
                        <div class="col-sm-9 col-9 pl-0">
                            <a href="https://www.houdunren.com/edu/front/video/12471"
                               class=" d-flex justify-content-between d-block mb-1">
                                <span class="title d-block">[docker]  磁盘挂载测试容器数据同步</span>
                            </a>
                            <div class="small text-black-50">
                                92期 李小龙 <i class="fa fa-clock-o"></i> 1小时前
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="list-group-item ">
                    <div class="row">
                        <div class="col-sm-3 col-3 pr-0">
                            <a href="https://www.houdunren.com/user/16649">
                                <img src="https://houdunren-image.oss-cn-qingdao.aliyuncs.com/166491552887490.gif"
                                     class="avatar rounded-circle img-thumbnail"
                                     alt="92期 李小龙">
                            </a>
                        </div>
                        <div class="col-sm-9 col-9 pl-0">
                            <a href="https://www.houdunren.com/edu/front/video/12470"
                               class=" d-flex justify-content-between d-block mb-1">
                                <span class="title d-block">[docker]  外部sequel访问容器内mysql服务</span>
                            </a>
                            <div class="small text-black-50">
                                92期 李小龙 <i class="fa fa-clock-o"></i> 1小时前
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
    </div>
</div>            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-white shadow-sm border-top text-secondary p-4">
    <div class="container">
        <div class="text-center p-3 p-sm-3">
            我们的使命：传播互联网前沿技术，帮助更多的人实现梦想
            <hr>
            Copyright © 2010-2018 houdunren.com All Rights Reserved
            京ICP备12048441号-3
            <div class="small text-secondary mt-2">
                <i class="fa fa-phone-square" aria-hidden="true"></i> :
                010-86467608
                <i class="fa fa-telegram ml-2" aria-hidden="true"></i> :
                <a href="mailto:2300071698@qq.com" class="text-secondary">
                    2300071698@qq.com
                </a>
                <div class="mt-2">
                    编码: <a href="http://www.aoxiangjun.com">向军大叔</a>
                </div>
            </div>
            <script type="text/javascript" src="http://tajs.qq.com/stats?sId=63802236" charset="UTF-8"></script>

<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? "https://" : "http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1276850215'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s96.cnzz.com/z_stat.php%3Fid%3D1276850215%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>
        </div>
    </div>
</div><script>
    require(['bootstrap'])
</script>
</body>
</html>
