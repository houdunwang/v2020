# Laravel使用技巧

## 路由

### 控制器调用路由

```
return \Route::respondWithRoute('edu.front.video.search');
```

### 资源路由别名前缀

```
Route::resource('lesson', 'LessonBuyController')->names('buy.lesson');
```

