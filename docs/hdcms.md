## HDCMS V5.0

## 前端组件

### nav

**使用效果**

![image-20181223234934661](assets/image-20181223234934661-5580174.png)

**示例代码**

```
@component('components.nav',['navs'=>[
	['title'=>'文章列表','url'=>route('content.article.index'),'active'=>true],
	['title'=>'发表文章','url'=>route('content.select_category')]
]])
@endcomponent
```

**属性说明**

| 属性   | 说明         |
| ------ | ------------ |
| title  | 菜单名称     |
| url    | 菜单链接     |
| active | 当前高亮菜单 |

