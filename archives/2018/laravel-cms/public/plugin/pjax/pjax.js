//定义加载区域
define([
    'jquery',
    'https://cdn.bootcss.com/jquery.pjax/2.0.1/jquery.pjax.min.js',
    'css!/plugin/pjax/pjax.css'
], function ($) {
    $(document).pjax('a[pjax]', '#pjax-container');
    //定义pjax有效时间，超过这个时间会整页刷新
    $.pjax.defaults.timeout = 1200;
    //显示加载动画
    $(document).on('pjax:click', function () {
        $("#loading").show();
    });
    //隐藏加载动画
    $(document).on('pjax:end', function () {
        $("#loading").hide();
    });
});