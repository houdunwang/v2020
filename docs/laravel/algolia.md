# algolia

## 注册

选择离你近的数据中心

![image-20180908012825011](assets/image-20180908012825011.png)



项目说明

![image-20180908013025626](assets/image-20180908013025626.png)



获取密钥

![image-20180923182237492](assets/image-20180923182237492.png)

## 安装

**安装组件**

```
//安装scout
composer require laravel/scout

//安装 Algolia PHP SDK
composer require algolia/algoliasearch-client-php
```

**生成配置文件**

```
php artisan vendor:publish --provider="Laravel\Scout\ScoutServiceProvider"
```

登录algolia网站获取algolia配置

```
'algolia' => [
	'id' => env('ALGOLIA_APP_ID', ''),
	'secret' => env('ALGOLIA_SECRET', ''),
],
```

## 模型使用

```
use Laravel\Scout\Searchable;

class Article extends Model
{
    use Searchable;
    ...
}
```

**查询**

```
Article::search('后盾人')->paginate(10);
```

