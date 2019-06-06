# WORKERMAN 聊天室

![1526631364812](assets/1526631364812-1710750.png)

> houdunren.com 后盾人 人人做后盾  作者：向军大叔 

GatewayWorker基于Workerman开发的一个框架，支持多协议多端口监听，支持分布式多机部署，用于快速开发长连接应用，例如移动通讯、物联网、智能家居、游戏服务端、聊天室等等。

手册： http://www.workerman.net/gatewaydoc/license/README.html

## 基础

#### 安装

1. 安装workerman

   ```
   composer require workerman/gateway-worker
   ```

2. 下载包: http://www.workerman.net/download/GatewayWorker.zip 解压后放在项目根目录，并更名为 socket

#### 启动

以debug（调试）方式启动

```
php socket/start.php start
```

以daemon（守护进程）方式启动，生产环境使用

```
php socket/start.php start -d
```

停止

```
php socket/start.php stop
```

#### 查看端口

查看`socket/Applications/YourApp/start_gateway.php`  文件中的端口设置，并修改协议为 `websocket`

```
// gateway 进程，这里使用Text协议，可以用telnet测试
$gateway = new Gateway("websocket://0.0.0.0:8282");
```

前端连接

```
<script>
    let socket = new WebSocket("ws://laravel.hd:8282");
    socket.onmessage = function(response){
        console.log(response);
    }
</script>
```

后台脚本

`socket/Applications/YourApp/Events.php` 文件包含了用户连接、发送、关闭等事件处理。



## PHP框架

使用GatewayWorker时开发者最关心的是如何与现有mvc框架(ThinkPHP Yii laravel等)整合，以下是官方推荐的整合方式。见示意图：

![image-20180417232643165](assets/image-20180417232643165.png)

> 以下示例为`laravel 5.6` 框架，用户注册登录非本章讨论内容，请自行开发。

#### workerman配置

修改`socket/Applications/YourApp/events.php`  如下:

```
<?php
use \GatewayWorker\Lib\Gateway;
class Events
{
   //用户连接socket时执行
   public static function onConnect($client_id) {
        Gateway::sendToClient($client_id, json_encode([
            'type'      => 'init',
            'client_id' => $client_id,
        ]));
   }
   //框架处理用户消息，所以不需要设置
   public static function onMessage($client_id, $message) {
   }
   //框架处理用户消息，所以不需要设置
   public static function onClose($client_id) {
   }
}

```

#### 路由

```
//聊天室
Route::get('chat/index', 'ChatController@index')->name('chat.index');
//欢迎新用户
Route::get('chat/welcome', 'ChatController@welcome')->name('chat.welcome');
//发送聊天信息
Route::post('chat/send', 'ChatController@send')->name('chat.send');
```

#### 控制器

```
<?php namespace App\Http\Controllers;
use GatewayWorker\Lib\Gateway;
use Illuminate\Http\Request;
use Auth;

class ChatController extends Controller
{
    public function __construct()
    {
    	//设置socket地址
        Gateway::$registerAddress = '127.0.0.1:1238';
    }
	//欢迎用户
    public function welcome()
    {
        $user = Auth::user();
        Gateway::sendToAll(json_encode([
            'type'=>'welcome',
            'name'=>$user['name']
        ]));
    }
	//发送消息处理
    public function send(Request $request)
    {
        Gateway::sendToAll(json_encode([
            'type'=>'message',
            'name'=>Auth::user()->name,
            'content'=>$request->input('content')
        ]));
    }
	//聊天页面
    public function index()
    {
        if ( ! \Auth::check()) {
            session()->flash('danger', '请登录后再聊天');

            return redirect()->route('login');
        }

        return view('chat.index');
    }
}
```

#### vue组件

**配置vue应用**

修改 `resources/assets/js/app.js` 文件为vue应用添加组件

```
Vue.component('hd-chat', require('./components/HdChat.vue'));
```

**创建组件**

创建 `resources/assets/js/components/HdChat.vue` 聊天室组件

```
<template> 
    <div class="container">
        <div class="card">
            <div class="card-header">聊天室</div>
            <div class="card-block">
                <div class="chat-lists container">
                    <ul id="chats"></ul>
                </div>
            </div>
            <div class="card-footer text-muted">
                <form action="">
                    <div class="form-group">
                        <textarea class="form-control" name="content" rows="3" @keyup.enter="send()"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<style lang="scss">
    .chat-lists {
        padding: 20px;
        ul {
            li {
                font-size: 16px;
                b{
                    color:seagreen;
                }
            }
        }
    }
</style>
<script>
    export default {
        mounted() {
            //连接SOCKET
            let socket = new WebSocket("ws://laravel.hd:8282");
            //绑定SOCKET会话处理
            socket.onmessage = this.message;
        },
        data() {
            return {}
        },
        methods: {
            message(response) {
                var data = JSON.parse(response.data);
                switch (data.type) {
                    case 'init':
                        axios.get('/chat/welcome');
                        break;
                    case 'welcome':
                        //欢迎新同学
                        this.push("欢迎 <b>" + data.name + "</b> 来到直播间");
                        break;
                    case 'message':
                        //聊天消息
                        let content = '<b>' + data.name + '</b> 说：' + data.content;
                        this.push(content);
                        break;
                }
            },
            send() {
                var con = $.trim($("[name='content']").val());
                if (con) {
                    axios.post('/chat/send', {content: con});
                    $("[name='content']").val('');
                }
            },
            push(message) {
                var li = "<li>" + message + "</li>";
                $("#chats").prepend(li);
            }
        }
    }
</script>
```