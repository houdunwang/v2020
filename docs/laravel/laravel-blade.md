# 自定义Blade标签

在 `app/Providers/AppServiceProvider.php` 文件中定义

```
public function boot()
{
		\Blade::directive('category',function($expression){
         $php=<<<php
            <?php
    \$data = \Modules\Article\Entities\Category::whereIn('id',explode(',','$expression'))->get();
    foreach(\$data as \$field):
    ?>
php;
            return $php;
        });
        \Blade::directive('endcategory',function(){
            return "<?php endforeach;?>";
        });
}
```

上面我们定义了 `category` 与 `endcategory` 两个标签用于遍历Category模型数据，使用方法如下：

```
@category(1,2)
        <li>{{$field['name']}}</li>
@endcategory
```

