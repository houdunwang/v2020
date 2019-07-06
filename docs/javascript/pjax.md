## pjax

下面是laravel 框架为例讲解

在 `resources/plugin/pjax` 目录下创建 `pjax.js` 与 `pjax.css` 内容如下

## 前端配置

https://github.com/defunkt/jquery-pjax

**pjax.js**

```
//定义加载区域
$(document).pjax('a','#pjax-container');
//定义pjax有效时间，超过这个时间会整页刷新
$.pjax.defaults.timeout = 1200;
//显示加载动画
$(document).on('pjax:click', function() {
    $("#loading").show();
});
//隐藏加载动画
$(document).on('pjax:end', function() {
    $("#loading").hide();
});

```

**pjax.css**

```
#loading {
  background-color: rgba(238, 238, 238, 0.6);
  display: none;
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  z-index: 2000;
  bottom: 0;
  padding-top: 10%;
}
#loading .spinner {
  margin: 100px auto;
  width: 50px;
  height: 60px;
  text-align: center;
  font-size: 10px;
}
#loading .spinner > div {
  background-color: rgba(0, 0, 0, 0.2);
  height: 100%;
  width: 6px;
  display: inline-block;
  -webkit-animation: stretchdelay 1.2s infinite ease-in-out;
  animation: stretchdelay 1.2s infinite ease-in-out;
}
#loading .spinner .rect2 {
  -webkit-animation-delay: -1.1s;
  animation-delay: -1.1s;
}
#loading .spinner .rect3 {
  -webkit-animation-delay: -1s;
  animation-delay: -1s;
}
#loading .spinner .rect4 {
  -webkit-animation-delay: -0.9s;
  animation-delay: -0.9s;
}
#loading .spinner .rect5 {
  -webkit-animation-delay: -0.8s;
  animation-delay: -0.8s;
}
@-webkit-keyframes stretchdelay {
  0%,
  40%,
  100% {
    -webkit-transform: scaleY(0.4);
  }
  20% {
    -webkit-transform: scaleY(1);
  }
}
@keyframes stretchdelay {
  0%,
  40%,
  100% {
    transform: scaleY(0.4);
    -webkit-transform: scaleY(0.4);
  }
  20% {
    transform: scaleY(1);
    -webkit-transform: scaleY(1);
  }
}
```

修改 Laravel框架根目录下的 `webpack.mix.js` 文件，添加以下代码用于复制 `plugin` 目录

```
.mix.copyDirectory('resources/plugin', 'public/plugin')
```

### 缓存处理

js文件当加载完后，下次不会重新加载。这在使用 vue.js 时会造成第二次请求页面不效果。解决方法如下：

```
<script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "{{ asset('js/article.js') }}?ver="+Math.random();
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
</script>
```

把这段代码放在 pjax 容器内，对 .js 文件设置了随机后缀，就可以让页面每次请求都进行加载了。

## Laravel配置

需要安装 https://github.com/spatie/laravel-pjax 用于实现后台处理

```
$ composer require spatie/laravel-pjax
```

在 `app/Http/Kernel.php` 文件添加

```
protected $middleware = [
    ...
    \Spatie\Pjax\Middleware\FilterIfPjax::class,
];
```

## 使用

主模板中引入文件

```
<script src="https://cdn.bootcss.com/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
<script src="{{asset('plugin/pjax/pjax.js')}}"></script>
<link rel="stylesheet" href="{{asset('plugin/pjax/pjax.css')}}">
```

定义 pjax加载区域

```
<div class="main-content container-fluid" id="pjax-container">
	<!--pjax加载动画-->
	<div id="loading">
		<div class="spinner">
			<div class="rect1"></div>
			<div class="rect2"></div>
			<div class="rect3"></div>
			<div class="rect4"></div>
			<div class="rect5"></div>
		</div>
	</div>
	<!--pjax加载动画 结束-->
	<div id="app">
		@yield('content')
	</div>
</div>
```

pjax 异步加载数据后会替换 id="pjax-container"  的div区域。