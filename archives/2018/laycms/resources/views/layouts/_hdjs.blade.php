<meta name="csrf-token" content="{{csrf_token()}}">
<script>
    window.hdjs = {
        //组件目录必须绝对路径
        base: '/org/hdjs',
        //上传文件后台地址
        uploader: '/uploader.php?',
        //获取文件列表的后台地址
        filesLists: '/filesLists.php?',
        //require.js配置项（可为空）
        requireJs: {paths: {}, shim: {}},
    };
</script>
<script src="/org/hdjs/require.js"></script>
<script src="/org/hdjs/config.js"></script>
