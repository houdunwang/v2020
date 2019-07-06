# 文档说明 

> 创作不易，转载请注明出处： 后盾人 @ houdurnen.com

为了让大家学习时更加方便，我们不只在 houdurnen.com 上提交视频教程，同时提供全套视频代码与文档等素材，下面是项目地址。

- http://gitee.com/houdunren/code
- http://github.com/houdunwang/coding

> 视频教程已经免费发布，看视频学习更生动 [houdunren.com](http://www.houdunren.com)

# 语言介绍

## 占有率高

PHP（外文名:PHP: Hypertext Preprocessor，中文名：“超文本预处理器”）是一种通用开源脚本语言。利于学习，使用广泛，主要适用于Web开发领域。。

截至 2018 年，近 80％ 的互联网网站基于 PHP 开发和运行，下图是[w3techs](https://w3techs.com)提供的PHP在[web开发市场占有率](https://w3techs.com/technologies/details/pl-php/all/all)。

![Historical trends in the usage of PHP](../assets/pl-php.png)

PHP 在服务器脚本语言市场[占有率](https://w3techs.com/technologies/overview/programming_language/all)中遥遥领先于其他对手：

![image-20181222135535460](../assets/image-20181222135535460-5458135.png)

上图是 [W3Techs](https://w3techs.com/technologies/overview/programming_language/all) 提供的 [服务器端脚本语言市场占有率](https://w3techs.com/technologies/overview/programming_language/all) 排名，根据数据显示 [Alexa](http://www.alexa.com/) 世界排名 **前一千万** 的网站，有 82.6% 使用 PHP 构建，此数据每日更新。

通过数据可以知道PHP语言是热度和使用度非常高，大部分商业网站都在使用PHP进行开发，显而易见PHP人才需要量巨大，学习和使用PHP语言是很有前途的。

## 性能强悍

PHP最新版本是PHP7，在性能和功能上都是史无前例的提升，下图是[Zend](http://www.zend.com/en/resources/php7_infographic)官方给出的PHP与其他语言[性能比较](http://www.zend.com/en/resources/php7_infographic)（数值越小性能越高）。

![image-20181222140517262](assets/image-20181222140517262-5458717.png)



我们再来看看PHP7与以往版本相比较的[性能提升](http://www.zend.com/en/resources/php7_infographic)（数值越大性能越高）。

![image-20181222140804948](assets/image-20181222140804948-5458885.png)



下面是 [PHP与Pyton&Java&Perl等主流语言](https://blog.famzah.net/2016/02/09/cpp-vs-python-vs-perl-vs-php-performance-benchmark-2016/) 的性能比较（注：排名越靠前越好）

![image-20180617194928927](../assets/image-20180617194928927.png)

 从运行结果分析，PHP7.0 比Python 快3倍，比Java也高出2倍多的速度，比自家PHP 5.6快出10位多。

> 脚本语言中明显的赢家是…PHP 7。🙂

 

## 哪些网站在使用？

| 网站     | 地址                               |
| -------- | ---------------------------------- |
| 唯品会   | https://www.vip.com/index.php      |
| 百度     | https://www.baidu.com/index.php    |
| bilibili | https://www.bilibili.com/index.php |
| 链家网   | https://bj.lianjia.com/index.php   |
| Facebook | https://www.Facebook.com           |

> 创作不易，转载请注明出处： 后盾人 @ houdurnen.com

# 基础知识

## 基础入门

### PHP是什么?

PHP(PHP: Hypertext Preprocessor，超文本预处理器的缩写)，是一种被广泛应用的开放源代码的、基于服务器端的用于产生动态网页的、可嵌入HTML中的脚本程序语言，尤其适合 WEB 开发。

当客户端向服务器的程序提出请求时，web服务器根据请求响应对应的页面，当页面中含有php脚本时，服务器会交给PHP解释器进行解释执行，将生成的html代码再回传给客户端，客户端的浏览器解释html代码，最终形成网页格式的页面。

### 执行方式

PHP 代码被包含在特殊的起始符和结束符中，使得网页的脚本可以进出“PHP 模式”。其它用 C 或 Perl 语言写的脚本，需要用大量的命令来编写程序以输出 HTML ，而用PHP 编写一个 HTML 脚本，只需嵌入了一些代码来完成操作（例如，在本例中输出了一些文本）。
和客户端的 JavaScript 不同的是，PHP 代码是运行在服务端的。如果在服务器上建立了如上例类似的代码，则在运行该脚本后，客户端就能接收到其结果，但他们无法得知其背后的代码是如何运作的。甚至可以将 web 服务器设置成让 PHP 来处理所有的 HTML 文件，这么一来，用户就无法得知服务端到底做了什么。

### PHP运行环境安装

大家在初始学习PHP时使用集成化开发环境是最好的选择，下面是常用的集成开发环境

| 集成开发软件 | 可使用的操作系统                   | 说明 |
| ------------ | ---------------------------------- | ---- |
| WAMP         | Win                                | 推荐 |
| XAMPP        | Win/Mac                            |      |
| Mamp         | Mac                                | 推荐 |
| Lamp         | Linux(CentOS/Fedora/Debian/Ubuntu) |      |

### PHP的特点

- 是开放源代码的，服务器端的脚本语言。
- 独立于操作系统，可以运行在几乎所有系统中。
- 支持大部分的服务器，如Apache,IIS。
- 支持大量的数据库，主要是Access\MySQL\SQL Server这三种。
- 可以创建图象。
- … …
- 还有一些其他特色功能在后面的高级技术详细介绍。
- 我们知道的网站如迅雷、新浪微博等大型网站都在使用PHP程序。

### C/S与B/S结构

**C/S结构**

C/S （Client/Server）结构，即大家熟知的客户机和服务器结构。它是软件系统体系结构，通过它可以充分利用两端硬件环境的优势，将任务合理分配到Client端和Server端来实现，降低了系统的通讯开销。目前大多数应用软件系统都是Client/Server形式的两层结构

**B/S****结构**

B/S（Browser/Server）结构即浏览器和服务器结构。它是随着Internet技术的兴起，对C/S结构的一种变化或者改进的结构。在这种结构下，用户工作界面是通过WWW浏览器来实现，极少部分事务逻辑在前端（Browser）实现，但是主要事务逻辑在服务器端（Server）实现。这样就大大简化了客户端电脑载荷，减轻了系统维护与升级的成本和工作量，降低了用户的总体成本。 

### 集成开发环境

**WAMP**

Windows下的Apache+Mysql/MariaDB+Perl/PHP/Python，一组常用来搭建动态网站或者服务器的开源软件，本身都是各自独立的程序，但是因为常被放在一起使用，拥有了越来越高的兼容度，共同组成了一个强大的Web应用程序平台。

**MAMP**

苹果系统下MAMP PRO是专业级版本的经典本地服务器环境的os x软件。MAMP这几个首字母代表苹果的OSX系统上的Macintosh、Apache、MySQL和PHP，顾名思义，你应该知道MAMP的强大功能 啦！MAMP 内含 Apache 伺服器、PHP 安装套件以及MySQL安装套件。 

### PHP的标记风格

```<?php 	… …  ?>```

这是PHP推荐使用的标记风格。服务器管理员不能禁用这种风格的标记。

### 分号

PHP用分号来分隔简单的语句。复合语句用大括号来标记代码块，如条件测试或循环，在大括号后面不要用分号。和其他语言不一样的是，在PHP中右括号(?>)前的分号不是必选的。

### 空白和换行符

一般来说，空白符在PHP中无关紧要。可以将一个语句展开成任意行，或者将语句紧缩在一行。
可以利用这个灵活的格式来使代码更具有可读性（通过排列分配、缩进等）。一些懒惰的程序员利用这种自由的格式创建根本无法阅读的代码，这是不提倡的。

### 程序的注释

PHP支持C、C＋＋和Shell脚本风格的注释，如下：

```
// 单行注释
/* ...*/  多行注释 		（注意：不能嵌套）
# 脚本注释
```

### 查看数据

**echo**

输出一个或多个变量，他不是函数，不需要使用括号，如果输出多个请用逗号分隔

```echo 1,2,3,4;```

**var_dump**

打印变量的相关信息

`var_dump(1234);`

区别：echo 是直接输出，var_dump输出和带有变量类型

## 变量知识

### 定义变量

PHP是弱类型语言，不像其他语言需要对变量进行类型声明。PHP中以 $ 作为前缀来定义变量，以a~z（大小写）或 _ 下划线定义变量名。

下面是合法的变量名

```
$hd =  'houdurnen.com';
$_name = '向军大叔';
```

下面是非法的变量声明

```
$999 = 'yahoo.com'
$&* = 'sina.com.cn'
```

### 弱类型

PHP是一种非常弱的类型语言。在大多数编程语言中，变量只能保持一种类型的数据，而且这个类型必须在使用变量前声明，例如C语言中。

而在PHP中，变量的类型通常不是由程序员设定的，确切地说，是根据该变量使用的上下文在运行时（即变量的值）决定的。

简单来说，var = 1;就是数字，var2 = '1'就是字符串，变量类型是由值决定的。 

### 传值与引用

**传值赋值**

直接使用 `=` 将变量的值赋值给另一个变量。

```
$a = 1;
$b = $a;
$b = 2;
echo $a;//结果是1
```

**引用赋值**

将一个变量的内存地址赋值给另一个变量的行为即传址赋值。需要在 `=` 等号前加上 `&` 引用符号，这样两个变量指向内存中的一个地址，任何一个变量的改变都影响到另一个变量，有点类似于快捷方式的概念。

```
$a = 1;
$b = &$a;
$b = 2;
echo $a;//结果是2
```

### 可变变量

可以变量即使用一个变量的值，作为另一个变量名。

```
$a = 'hello';	//普通变量
$$a = 'world';	//可变变量 相当于：$hello = ‘world’;
echo "$a ${$a}";//输出：hello world
echo "$a $hello";//输出：hello world
```

### 变量作用域

变量作用域指变量在代码中可以访问的位置。

#### 超全局变量

可以代码的任何位置都可以访问的变量

| 变量      | 说明                           |
| --------- | ------------------------------ |
| $_GET     | 地址栏GET提交                  |
| $_POST    | 表单POST提交                   |
| $_FILES   | 文件上传变量                   |
| $_SESSION | 会话变量                       |
| $_COOKIE  | cookie值变量                   |
| $_GLOBALS | 全局变量                       |
| $_REQUEST | 包含\$_GET、\$_POST、\$_COOKIE |
| $_SERVER  | 服务器环境变量                 |

#### 全局变量

全局声明（函数外声明）的变量会保存在 `$_GLOBALS` 中，函数内默认不能访问到全局变量，在函数中访问需要使用 `global` 关键字。

```
$hd='后盾人';
function p() {
	//利⽤ global 引入全局变量
	global $hd; 
	echo $hd;
}
p(); 
```

> 也可以使用全局数组\$GLOBALS调⽤用全局变量量。 如： \$GLOBALS['hd'];

#### 检测变量

通过isset 函数可以检测变量是否定义。

```
var_dump(isset($name));
# 结果是false
```

#### 变量销毁

php在全部代码执行结束后会删除所有变量，也使用 `unset` 函数可以在程序运行中删除变量。

```
$name='houdunren.com';
unset($name);
```

全局变量不能在函数中删除

```
$name = 'houdunren.com';
function run()
{
    global $name;
    unset($name);
}
run();
echo $name;
# 依然可以输出 houdurnen.com
```

### 静态变量

PHP支持声明函数变量为静态的(static)。一个静态变量在所有对该函数的调用之间共享，并且仅在脚本的执行期间函数第一次被调⽤时被初始化。
要声明函数变量为静态的⽤关键字static。通常静态变量的第一次使⽤用时赋予⼀个初始值。

```
function calculate()
{
    static $a=1;
    return ++$a;
}
calculate();
echo calculate();
```

## 数据类型

使用不同数据类型储存不同数据，就像我们家里面放衣服和放洗手液会使用用不同的容器一样。下面是常用PHP数据类型表：

| 类型    | 说明   |
| ------- | ------ |
| integer | 整型   |
| float   | 浮点型 |
| string  | 字符串 |
| boolean | 布尔型 |
| array   | 数组   |
| object  | 对象   |

### 整型

整型可以是十进制、八进制、十六进制。

```
01988 #十进制
0xfff #十六进制
```

下面是 777 八进制数转成 10进制数，即逢8进1原则，PHP中使用 octdec() 函数可以将8进制转为10进制。
$$
7*8^2+7*8^1+7*8^0 = 511
$$
下面是十六进帛 `FAF` 转为10进制数，PHP中使用hexde()函数将16进制转为10进制
$$
15*16^2+10*16^1+15*16^0
$$

### 浮点数

浮点数表示实数，可理解为有限或无限小数。

```
0.12
-10.98
```

### 布尔型

当转换为 boolean 时，以下值被认为是FALSE：这个地方提示学生不用记，按照自己的感觉来就可以判定了，读完一遍之后把ppt关掉，提问true还是false，学生都会知道的

1. 布尔值 FALSE
2. 整型值 0（零）
3. 浮点型值 0.0（零）
4. 空白字符串
5. 字符串 "0"
6. 没有成员变量的数组
7. 没有单元的对象（仅适用于 PHP 4）
8. 特殊类型 NULL（包括尚未设定的变量）

所有其它值都被认为是 TRUE

### 字符串

#### 定义

**引号**

字符串可以用双引号"" 或 '' 号包含，区别是双引号中可以解析变量。

```
$url = 'houdunren.com';
$string = "后盾人网址是 {$url}";
```

在所有输出前使用下面的代码可以正确显示中文：

```
header('Content-type:text/html;charset=utf-8');
```

**定义符**

定界符文本表现的就和双引号字符串一样，在定界符文本中不需要转义引号，适合输入大量文本。

结束符必须从第一列开始，并且后面除了分号以外不能包含任何其他字符，空格也不可以。

```
$string =<<<str
这是使用定界符输入的内容
str;
echo $string;
```

**连接符**

多个字符串使用 . 符号连接

```
$name = '后盾人';
$url  = 'houdunren.com'
echo $name.$url;

```

#### 转义

转义是将有多种含义的字符进行转换，比如 $即是变量前缀也是美元符号，就需要转义在不同场景进行改变。

```
echo  "变量定义 \$name = 'houdunren.com',学会了吗？";

```

#### 常用函数

strlen — 取得字符串长度传度的函数

```
echo strlen('houdunren.com');

```

mb_strlen — 根据字符编码获取长度

```
echo mb_strlen('后盾人','utf8');

```

trim — 截去字符串首尾的内容

```
$string = ' houdunren.com  ';
echo strlen(trim($string,' moc'));
# 从前后删除 moc和空格字符

```

rtrim从右侧删除、ltrim从左侧删除

```
$string = ' houdunren.com  ';
echo strlen(rtrim($string,' moc'));

```

strtolower — 字母转为小写

```
$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtolower($str);
echo $str; // Prints mary had a little lamb and she loved it so

```

strtoupper — 字母转大写

```
$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtoupper($str);
echo $str; // Prints MARY HAD A LITTLE LAMB AND SHE LOVED IT SO

```

ucfirst — 将字符串的首字母转换为大写

```
$foo = 'hello world!';
$foo = ucfirst($foo); // Hello world!

```

ucwords — 将字符串中每个单词的首字母转换为大写

```
$foo = 'hello world!';
$foo = ucwords($foo);             // Hello World!

$foo = 'hello|world!';
$baz = ucwords($foo, "|");        // Hello|World!

```

md5 — 计算字符串的 MD5 散列值，以 32 字符十六进制数字形式返回散列值

```
md5('houdunren.com') //962ff8546a001f8f6d0adecf08905d14

```

explode — 使用一个字符串分割另一个字符串

```
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2

```

implode — 将一个一维数组的值转化为字符串

```
$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $array);

echo $comma_separated; // lastname,email,phone

```

substr — 返回字符串的子串

```
$rest = substr('abcdef', 1);     // bcdef
$rest = substr('abcdef', 1, 3);  // bcd
$rest = substr("abcdef", 0, -1);  // 返回 "abcde"
$rest = substr("abcdef", 2, -1);  // 返回 "cde"
$rest = substr("abcdef", 4, -4);  // 返回 ""
$rest = substr("abcdef", -3, -1); // 返回 "de"

```

mb_substr — 获取部分字符串

```
echo mb_substr('后盾人', 1, 1, 'utf-8'); //盾

```

strstr — 查找字符串的首次出现

```
$email  = 'name@example.com';
$domain = strstr($email, '@');
echo $domain; // 打印 @example.com

```

strrchr — 查找指定字符在字符串中的最后一次出现

```
echo strrchr('hdcms.jpg', '.'); // .jpg

```

strpos — 查找字符串首次出现的位置，如果没找到，将返回 **FALSE**

```
echo strpos('houdurnen.com', 'o'); // 返回1

```

strrpos — 计算指定字符串在目标字符串中最后一次出现的位置

```
echo strrpos('houdurnen.com', 'o'); // 返回11

```

str_replace — 子字符串替换

```
echo str_replace('houdunren', 'hdcms', 'houdunren.com'); //返回 hdcms.com

echo str_replace(['小猫','小狗'], '*', '我家有一只可爱的小猫和小狗');//我家有一只可爱的*和*

echo str_replace(['小猫','小狗'], ['猫猫','旺旺'], '我家有一只可爱的小猫和小狗'); //我家有一只可爱的猫猫和旺旺

```

### NULL

NULL数据类型只有一个值NULL。

1. 变量未被赋予任何值
2. 变量被赋值为NULL
3. 被unset()函数处理后的变量

```
\$a;		//变量 \$a未被赋予任何变量，值为NULL
\$b = NULL;	//变量 \$b被赋值为NULL
\$c = 10;		

unset($c);	
//使用unset()函数处理后，\$c为NULL 

```

### 相关函数

**getType()** 

```php
\$num = 1234; 
\$type = gettype(\$num); 
var_dump(\$type);

```

检测是否为布尔型

```
\$var = true;
\$bool = is_bool(\$var);
var_dump(\$bool);

```

检测是否为整型

```
$int = 1234; 
$bool = is_int($int); 
var_dump($bool);

```

检测是否为浮点数

```
$num = 1.1234; 
$bool = is_float($num); 
var_dump($bool);

```

检测是否为字符串

```
$string = 'houdunwang'; 
$bool = is_string($string); 
var_dump($bool);

```

检测是否为NULL

```
$var = null;
$bool = is_null($var);
var_dump($bool);

```

### 类型转换

自动转换

PHP类型根据值，自动转换

```
$num1 = '1'; 
$num2 = '2'; 
echo $num1 + $num2; # 字符串转为数字相加

```

强制转换 

```
settype($var,'type'); # type类型为integer、double、string、array 与 object

$var = '123'; 

settype($var,’integer’);
var_dump($var); 就会变成int类型

intval() $var = '123'; 
var_dump(intval($var));

floatval() $var = '1.23';
var_dump(floatval($var));

strval() $var = 123;
var_dump(strval($var));

```

## 常量使用

常量是一个简单值的标识符（名字）。常量默认为大小写敏感。按照惯例常量标识符总是大写的。 

**常量特性**

- 常量前面没有美元符号（$）
- 常量只能用define() 函数定义，而不能通过赋值语句
- 常量一旦定义就不能被重新定义或者取消定义
- 常量的值用来定义 整型，浮点，字符串，布尔值，数组（PHP7新增）
- 常量可以不用理会变量范围的可以在任何位置访问

**声明常量**

常量可以使用 `const` 和 `define` 定义。

- const 是语言结构，在编译时要比define快
- define 可以设置第三个参数为true，来定义不区分大小写的常量
- 类文件中定义常量也使用const，所以const统一易读

```
define('常量名',值); 
define('WEBNAME','houdunwang');
echo WEBNAME;

```

**常量检测**

```
$bool = defined('WEBNAME');
var_dump($bool); // 结果是false

```

**系统常量**

```
__DIR__			文件所在目录
__FILE__		文件路径
__LINE__		程序代码行号
PHP_VERSION 	显示PHP版本
PHP_OS   		显示服务器的操作系统版本
TRUE			boolean值真(true)支持小写常量
FALSE 			boolean值假(false)支持小写常量
__FUNCTION__	函数名称
__METHOD__		方法名称
__CLASS__		类名称

```

使用函数 `get_defined_constants(true)` 可以获取当前可使用的所有常量。

## 运算符

### 算术运算符

| 运算符  | 说明                                |
| ------- | ----------------------------------- |
| \$a+\$b | 加法	\$a和\$b的和                |
| \$a-\$b | 减法	\$a和\$b的差                |
| \$a*\$b | 乘法	\$a和\$b的积                |
| \$a/\$b | 除法	\$a除以\$b的商              |
| \$a%\$b | 取模	\$a除以\$b后的余            |
| ++\$a   | 前加  \$a 的值先加一，然后进行操作  |
| \$a++   | 后加 	\$a 的值先进行操作，后加一 |
| --\$a   | 前减  \$a 的值先减一，然后进行操作  |
| \$a--   | 后减  \$a 的值先进行操作，后减一    |

### 赋值运算符

| 运算符 | 说明                                 |
| ------ | ------------------------------------ |
| =      | 右边值赋值给左边变量                 |
| +=     | 左边值加上右边值赋值给左边变量       |
| -=     | 左边值减掉右边值赋值给左边变量       |
| *=     | 左边值乘以右边值赋值给左边变量       |
| /=     | 左边值除以右边值赋值给左边变量       |
| .=     | 左边字符串连接到右边变量后面         |
| %=     | 左边值对右边值取余数后赋值给左边变量 |

### 字符串运算符

| 运算符 | 说明                           |
| ------ | ------------------------------ |
| .      | 它返回其左右参数连接后的字符串 |
| .=     | 左边字符串连接到右边变量后面   |

### 比较运算符

| 运算符    | 说明                                               |
| --------- | -------------------------------------------------- |
| `$a==$b`  | 等于		TRUE，如果\$a等于\$b                   |
| `$a===$b` | 全等于 	TRUE，如果\$a等于\$b，并且类型也相同    |
| `$a!=$b`  | 不等		TRUE，如果\$a不等于\$b                 |
| `$a<>$b`  | 不等		TRUE，如果\$a不等于\$b                 |
| `$a!==$b` | 非全等		TRUE，如果\$a不等于\$b，或者类型不同 |
| `$a<$b`   | 小于		TRUE，如果$a严格小于\$b                |
| `$a>$b`   | 大于		TRUE，如果\$a严格\$b                   |
| `$a<=$b`  | 小于等于	TRUE，如果 \$a 小于或者等于\$b         |
| `$a>=$b`  | 大于等于	TRUE，如果 \$a 大于或者等于\$b         |

### 逻辑运算符

| 运算符      | 说明                                       |
| ----------- | ------------------------------------------ |
| \$a and \$b | 逻辑与	TRUE，如果 \$a 与 \$b 都为 TRUE  |
| \$a or \$b  | 逻辑或	TRUE，如果 \$a 或 \$b 任一为TRUE |
| !\$a        | 逻辑非	TRUE，如果 \$a 不为 TRUE         |
| \$a && \$b  | 逻辑与	TRUE，如果 \$a 与 \$b 都为TRUE   |
| `$a || $b`  | 逻辑或	TRUE，如果 \$a 或 \$b 任一为TRUE |

and与&& 、or与||是同一逻辑运算符的两种写法，但优先级不同。

这四个符号的优先允许从高到低是：&&、||、AND、OR。

### 三元表达式

变量=(表达式)？值1:值2;
当表达式的返回值为true时，$变量被赋予值1，否则被赋予值2

```
echo true?'向军':'后盾人'; //返回向军

```

**?? 与 ?:**

```
$var=0;
echo $var?:'大叔'; #输出大叔

$var=0;
echo $var??'大叔';#输出0

```

PHP 7 新增加的 NULL 合并运算符（??）是用于执行isset()检测的三元运算的快捷方式。
?: 只判断 true 或 false ，而 ?? 判断变量存在并且值不为null

### 屏蔽错误

@ 运算符用于屏蔽表达式警告错误

```
@(20/0); 

```

## 流程控制

### if/else/elseif

当条件表达式的值为真（true）时，PHP将执行语句组，相反条件表达式的值为假（false）时，PHP将不执行语句组，忽略语句组执行下面的语句。

```
if (true) {
    echo '向军大叔';
} else {
    echo '不成立';
}

//也可以使用以下写法
if (true) :
    echo '向军大叔';
 else :
    echo '不成立';
 endif;

```

**elseif**

```
$age = 10;
if ($age<=15) {
    echo '儿童';
} elseif ($age<=30) {
    echo '青年';
} elseif ($age<=50) {
    echo '中年';
} else {
    echo '尊敬的老人';
}

//也可以使用以下写法
$age = 10;
if ($age<=15) :
    echo '儿童';
elseif ($age<=30) :
    echo '青年';
elseif ($age<=50) :
	echo '中年';
else :
    echo '尊敬的老人';
endif;

```

### switch

switch设置多个执行代码块，break指令终止向下执行，default为上面条件都不满足时执行的默认代码块。

```
switch ($status) {
case 'success':
    echo '成功';
    break;
case 'error':
    echo '错误';
    break;
case 'warning':
    echo '警告';
    break;
}

//也可以使用以下写法
switch ($status) :
    case 'success':
        echo '成功';
        break;
    case 'error':
        echo '错误';
        break;
    case 'warning':
        echo '警告';
        break;
endswitch;

```

### while

当while循环语句中表达式（循环控制语句）的结果为真时，程序将反复执行同一段程序：循环体（ while中的语句或语句序列），直到满足一定的条件（表达式的结果为假时）后才停止执行该段程序。

```
$num = 10;
while ($num>0) {
    echo($num--).'<br/>';
}

//也可以使用以下写法
$num = 10;
while ($num>0):
    echo($num--).'<br/>';
endwhile;

```

### do...while

与while的差别是条件后判断。

```
$num = 10;
do {
    echo($num--).'<hr/>';
} while ($num>0);

```

### for

```
for(表达式1;表达式2;表达式3){
	语句或语句序列;
}
// 表达式1为循环初始条件；
// 表达式2为循环控制条件；
// 表达式3为控制变量递增；

```

```
for ($num=10;$num>0;$num--) {
    echo $num.'<hr/>';
}
// 也可以使用以下写法
for ($num=10;$num>0;$num--) :
    echo $num.'<hr/>';
endfor;

```

### break 与 continue

**break **

我们之前在 switch 条件判断中已经使用过 break 关键字，它会使得程序流程离开 switch 本体中的语句，如果 break 使用在 for、while 或 do-while 循环结构中时，将会使得程序离开该层循环。

```
do {
    if (!isset($num)) {
        $num=10;
    }
    if ($num==0) {
        break;
    }
    echo($num--).'<hr/>';
} while (true);


```

break 在多层循环嵌套使用时，可以指定跳转出层数。

```
$num=0;
while (true):
    $num++;
    switch ($num) {
        case $num%2==0:
            echo $num."<hr/>";
            break;
        case $num%15==0:
            echo $num."<hr/>";
            break 2;
    }
endwhile;

```

**continue**

continue 的作用与 break 有点类似，continue 若使用在 for、while 或 do-while循环结构中，当程序执行至 continue 时，之后的语句将直接被略过，而直接执行下一次的循环动作。 

```
for ($num=10;$num>0;$num--) {
    if(!($num%2))continue;
    echo $num.'<hr/>';
}

```

## 文件引入

**include & require**

使用include和require 将文件导入，就像把该文件粘贴到使用函数的地方。

include( )与require ( )区别在于错误处理方式，当引入产生错误时include( )产生一个警告而require( )则导致一个致命错误。

```
include './test.php'; 
echo 'test'; //如果test.php文件不存在会报一个warning错误，但是可以输出test

```

可以使用 @ 屏蔽incluce加载警告错误

```
if (!@include 'a.php') {
    echo '文件不存在';
}

```

require 加载失败时将终止程序执行

```
require './test.php'; 
echo 'test'; //如果test.php文件不存在会报一个fatal错误，不可以输出test

```

**include_once和require_once**

与include( )语句及require( )区别是如果文件已经加载过，则不会重复加载文件。

```
// 因为 include 每次都加载所以下面两行代码执行会报错
include './functions.php';
include './functions.php'; 

//下面使用 include_once 就不会报错
include_once './functions.php';
include_once './functions.php';

```

## 日期时间

日期与时间是常用的数据属性，比如二手车平台新车上架时间，社区平台的发贴时间等。

### 时区

时间根据不同国家以时区划分，下面是中国可用的时区。因为我国不区分时区所以以下用哪个都可以。

| 时间           | 说明                                       |
| -------------- | ------------------------------------------ |
| PRC            | People’s Republic of China，中华人民共和国 |
| Asia/chongqing | 重庆                                       |
| Asia/shanghai  | 上海                                       |
| Asia/urumqi    | 乌鲁木齐                                   |

**设置时区**

1. PHP.ini配置（不推荐使用，因为有些服务器是改不了配置项的）`date.timezone = PRC`
2. 脚本中修改 （推荐使用）

- date_default_timezone_get()取得当前使用时区

- date_default_timezone_set()设定当前使用时区

- ```
  date_default_timezone_set("PRC");
  echo date('y-m-d H:i:s');
  
  ```

### UNIX时间戳

PHP的时间戳开始于1970年1月1日零点，默认为10位整数数值。

#### time

返回当前Unix 时间戳秒数，1毫秒等于一千分之一秒。

```
echo time();

```

#### microtime

返回当前 Unix 时间戳和微秒数。1微秒等于一百万分之一秒。

```
list($usec, $sec) = explode(" ", microtime());
echo $sec.':'.$usec;

```

设置参数为TRUE返回浮点数

```
echo microtime(true);

```

#### 脚本执行时间

```
function runtime($start=null, $end=null)
{
    static $cache=[];
    if (is_null($start)) {
        return $cache;
    } elseif (is_null($end)) {
        return $cache[$start] = microtime(true);
    } else {
        $end = $cache[$end]??microtime(true);
        return $end-$cache[$start];
    }
}
//record
runtime('for');
for ($i=0;$i<20000000;$i++):
    $i++;
endfor;

//record
runtime('while');
$n=0;
while ($n<20000000):
    $n++;
endwhile;

echo runtime('for', true);
echo '<hr/>';
echo runtime('while', true);

```

#### date

格式化一个本地时间／日期

```
echo date('Y-m-d h:i:s');

```

通过第二个参数设置处理的时间

```
echo date('Y-m-d', time()-3600*24*100);

```

参数说明

| 参数 | 说明                                | 返回值                 |
| ---- | ----------------------------------- | ---------------------- |
| Y    | 4 位数字完整表示的年份              | 例如：*1999* 或 *2003* |
| y    | 2 位数字表示的年份                  | 例如：*99* 或 *03*     |
| m    | 数字表示的月份，有前导零            | *01* 到 *12*           |
| n    | 数字表示的月份，没有前导零          | *1* 到 *12*            |
| d    | 月份中的第几天，有前导零的 2 位数字 | *01* 到 *31*           |
| j    | 月份中的第几天，没有前导零          | 1 到 31                |
| H    | 小时，24 小时格式，有前导零         | *00* 到 *23*           |
| h    | 小时，12 小时格式，有前导零         | 01 到 12               |
| i    | 有前导零的分钟数                    | 00 到 59               |
| s    | 秒数，有前导零                      | 00 到 59               |

#### getdate

 取得日期／时间信息

```
print_r(getdate(strtotime("+1 day"))); //获取1天后的时间数据

```

#### strtotime

将任何字符串的日期时间描述解析为 Unix 时间戳

```
// ISO格式时间转为时间戳
echo strtotime('2022-1-20 03:22:12');
echo '<br/>';
echo date("Y-m-d h:i:s", 1547954532);

//当前时间戳
echo strtotime('NOW');
echo '<br/>';
echo date("Y-m-d H:i:s", strtotime('NOW'));

```

**时间计算**

可以获取计算后的时间[格式参数](http://php.net/manual/zh/datetime.formats.relative.php)

```
//1年加1天后的时间戳
echo strtotime('+1 day +1 year');
echo '<br/>';
echo date("Y-m-d H:i:s", strtotime('+1 day +1 year'));

//下周五
echo date("Y-m-d H:i:s", strtotime('next friday'));

```

### 对象操作

PHP提供了面向对象的操作日期时间的方式，[Carbon](https://carbon.nesbot.com/docs/) 就是基于PHP内置对象的开源产品，功能丰富使用简单，具体Carbon课程请登录 [后盾人](https:/www.houdunren.com) 查看学习。

**简单使用**

```
//定义时区，当然也可以使用date_default_timezone_set函数的
$prc = new DateTimeZone('PRC');
$dateTime = new DateTime();
$dateTime->setTimezone($prc);
echo $dateTime->format('Y-m-d H:i:s');

//直接设置时间
$dateTime = new DateTime('2025-2-12 3:22:12');
echo $dateTime->format('Y-m-d H:i:s');
//输出时间戳
echo $dateTime->format('U');

//重新时期与时间
$dateTime->setDate(2019, 10, 1);
$dateTime->setTime(10, 22, 12);
echo '<br/>';
echo $dateTime->format('Y-m-d H:i:s');

```

**根据时间戳生成时期**

```
$dateTime = new DateTime();
$dateTime->setTimestamp(time());
echo $dateTime->format('Y-m-d H:i:s');

```

**创建不规则时间**

根据给定的格式解析日期时间字符串，用于对不规则日期时间格式处理。

```
$dateTime = DateTime::createFromFormat('Y/m-d His', '2020/12-13 081253');
echo $dateTime->format('Y-m-d H:i:s');

```

**获取时间差**

```
$dateTime1 = new DateTime();
$dateTime2 = new DateTime('2019-9-2');
$interval = $dateTime1->diff($dateTime2);
$format = '距离生日还有 <span style="color:red">%m个月%d天%h小时%i分钟%s秒</span> <br/>共%R%a天';
echo $interval->format($format);

```

说明 %R 显示+或-表示大于或小于，%a相差天数。

**添加时间**

格式以字母P开始后面跟着一个周期指示器。如果包含时间元素则以字母T开始。比如 `P2DT3H`表示间隔2天3小时。

```
$date = new DateTime();
$interval = new DateInterval('P2DT2H5M');
echo $date->format('Y-m-d H:i')."<br/>";

//增加时间
$date->add($interval);
echo $date->format('Y-m-d H:i');

//减少时间
echo "<br/>";
echo (new DateTime())->sub($interval)->format('Y-m-d H:i');

```

## 数学函数

PHP提供了丰富的数学操作函数，下面我们介绍常用的函数使用，其他函数使用请[参考手册](http://php.net/manual/zh/ref.math.php)。

#### ceil

进一法取整

```
echo ceil(10.2); //输出11

```

### floor

向下取整

```
echo floor(10.2); //输出10

```

### max

找出最大值

```
echo max(1, 3); //返回3
```

### min

找出最小值。

```
echo min(1, 3);//返回1
```

下面是获取页码的逻辑，并对用户参数进行了验证处理，防止出现负数与超过总页码100的数值。

```
echo  min(100, max(1, $_GET['page']??1));
```

### round

对浮点数进行四舍五入处理。

```
echo round(12.567, 2);
```

### mt_rand

生成更好的随机数，下面是生成验证码随机数示例。

```
function code(int $len=5):string
{
    $str = 'abcdefghknm12345678';
    $code = '';
    for ($i=0;$i<$len;$i++) {
        $index = mt_rand(0, strlen($str)-1);
        $code.=strtoupper($str[$index]);
    }
    return $code;
}
echo code(5);
```

# 函数编程

> 创作不易，转载请注明出处： 后盾人 @ houdurnen.com

函数（function）是一段完成指定任务的已命名代码，函数可以遵照给它的一组值或参数完成任务，并且可能返回一个值。使用函数可以节省编译时间，因为无论调用多少次，函数只需被编译一次。

**函数的特性：**

1. 控制程序设计的复杂性
2. 提高软件的可靠性
3. 提高软件的开发效率
4. 提高软件的可维护性
5. 提高程序的重用性

## 函数语法

```
function  函数名称（参数1，参数2 …）{
	//程序业务内容
	return 返回值； //如需函数有返回值时使用，否则函数返回值为null
} 
```

**函数名称**

它是函数在程序代码中的识别名称，函数名可以是以字母或下划线开头后跟零个或多个字母、下划线和数字的任何字符串。函数名不区分大小写。

命名函数时不可使用已声明的函数，或PHP内建的函数名称。

**返回值**

当调用函数时需要它返回一些数值，那么就要函数体中用return语句实现。格式如下：

```
return '返回值'; //返回值也可以是一个表达式
```

如果函数中没有使用return返回值时则函数返回值为null

## 函数检测

function_exists 用于检测函数是否定义

```
//检测hd这个函数是否定义：
var_dump(function_exists('hdcms'));
```

## 命名空间

使用命名空间可以将函数声明在指定空间，防止函数重名引起冲突。

下面是定义 `User.php` 与 `Article.php` 两个文件内容如下：

User.php 文件内容

```
namespace User;
function show()
{
    echo __NAMESPACE__.'\\'.__FUNCTION__.'<hr/>';
}
```

Article.php 文件内容

```
namespace User;
function show()
{
    echo __NAMESPACE__.'\\'.__FUNCTION__.'<hr/>';
}
```

在 Test.php 使用

```
include 'User.php';
include 'Article.php';
User\show();
Article\show();
```

使用命名空间后就可以定义相同名称的函数了。

## 参数传递

**按值传递参数**

父程序直接传递指定的值或是变量给函数使用。由于所传递的值或变量，与函数里的数值分别储存于不同的内存区块，所以当函数对所导入的数值作了任何变动时，并不会对父程序造成直接影响。

**按址传递参数(用“&”符号实现)**

相对于按值传递模式，并不会将父程序中的指定数值或目标变量传递给函数，而是把该数值或变量的内存储存区块相对地址导入函数之中。因此当该数值在函数中有任何变动时，会连带对父程序造成影响。	

```
function make(&$num)
{
    return ++$num;
}
$a = 1;
make($a);
echo $a;
```

**点语法**

当传递的参数数量确定时，可以使用…与变量名。函数的所有参数会成为变量的数组元素。

```
function sum(...$args)
{
    return array_sum($args);
}
echo sum(1, 2, 3);
```

**参数默认值**

php支持函数的默认方式调用。如果在调用函数时没有指定参数的值，在函数中会使用参数的默认值。 默认参数必须列在所有没有默认值参数的后面。

```
function mobile($tel,$num=4,$fix = '*'){
    return substr($tel,0,-1*$num).str_repeat($fix,$num);
}
echo mobile('11122222121',3);
```

## 严格模式

在文件头部定义`declare(strict_types=1)` 为严格模式，这样会对函数参数类型进行严格约束。

```
// 必须定义在文件头
declare(strict_types=1);
//参数必须为int类型
function handle(int ...$num)
{
    return array_sum($num);
}
try {
	//参数类型错误抛出异常
    echo handle(1, '2', 3);
} catch (\Throwable $th) {
    echo $th->getMessage();
}
```

## 返回值类型

PHP7中我们可以设置函数允许的返回值类型。

```
function make():int
{
    return '向军大叔';
}

try {
    make();
} catch (\Throwable $th) {
    echo $th->getMessage();
}
```

如果设置 `?int` 表示返回类型为 `int`  或 `null`

```
function make():?int
{
    return null;
}

try {
    var_dump(make());
} catch (\Throwable $th) {
    echo $th->getMessage();
}
```

系统会对返回值自动处理

```
function make():String
{
    return 100;
}

try {
    var_dump(make());
} catch (\Throwable $th) {
    echo $th->getMessage();
}
```

如果不希望函数返回任何值时，设置返回值为 `void`

```
function make():void
{
    return '向军大叔';
}

try {
    var_dump(make());
} catch (\Throwable $th) {
    echo $th->getMessage();
}
```

## 变量范围

**变量能见度**

所谓变量的能见度，意指变量在程序中的可作用范围。当一个变量执行赋值动作后，会随着声明局部的差异，而有不同的作用范围。大致上来说变量会依据声明的局部分为下列两种：局部变量和全局变量。

**局部变量**

在函数之中声明的变量就是局部变量，并且该变量只有在函数范围之中才能加以使用。如果其它程序局部需要调用使用该变量值时，必须透过「return」指令，来将其传回至主程序区块以作后续处理。

```
$hd=0;
function p(){ 
	$hd = 3;	//定义局部变量
	echo "在函数中显示局部变量\$hd值: $hd </br>";
}
p();
echo "在函数外显示变量\$hd值: $hd <br>";
```

**全局变量**

在函数范围之外声明的变量为全局变量，在函数无法直接使用全局变量，函数要使用全局变量，必须要利用global引入或 $GLOBALS超全局数组引入。

```
$hd=“后盾网”; 
function p() { 	
	global $hd; //利用 global 引入全局变量
	echo $hd;
}
p();
```

**静态变量**

PHP支持声明函数变量为静态的(static)。一个静态变量在所有对该函数的调用之间共享，并且仅在脚本的执行期间函数第一次被调用时被初始化。要声明函数变量为静态的用关键字static。通常，静态变量的第一次使用时赋予一个初始值。

```
function sum(int ...$num):int
{
    static $count=0;
    return $count+=array_sum($num);
}
echo  sum(1, 2, 3);
echo '<hr/>';
echo  sum(1, 2, 3);

```

## 变量函数

PHP 支持变量函数的概念。这意味着如果一个变量名后有圆括号，PHP 将寻找与变量的值同名的函数，并且将尝试执行它。除了别的事情以外，这个可以被用于实现回调函数，函数表等等。

变量函数不能用于语言结构，例如 echo()，print()，unset()，isset()，empty()，include()，require() 以及类似的语句。需要使用自己的外壳函数来将这些结构用作变量函数。 

```
$file = 'hd.gif';
$action =  strtolower(trim(strrchr($file, '.'), '.'));
function jpg()
{
    return 'jpeg 类型';
}

function png()
{
    return 'png 类型';
}
if (!function_exists($action)) {
    echo '文件类型错误';
} else {
    echo $action();
}

```

## 递归调用

所谓的函数递归调用，就是函数可以在其声明的执行叙述之中调用执行自己。

通常在此类型的函数之中会附加一个条件判断叙述，以判断是否需要执行递归调用，并且在特定条件下终止函数的递归调用动作，把目前流程的主控权交回上一层函数执行。因此当某个执行递归调用的函数，没有附加条件判断叙述时可能会造成无限循环的错误情形。

函数递归调用最大的好处在于可以精简程序中繁杂重复调用程序，并且能以这种特性来执行一些较为复杂的运算动作。

```
function recursive($n)
{
    if ($n==1) {
        return $n;
    }
    return $n*recursive($n-1);
}
echo "当 N 值为 5 时,阶乘为: ".recursive(5);

```

![递归](assets/%E9%80%92%E5%BD%92.gif)

# 数组类型

> 创作不易，转载请注明出处： 后盾人 @ houdurnen.com

数组是在程序设计中，为了处理方便， 把若干变量按有序的形式组织起来的一种形式。
按数组键值类型的不同，数组又可分为数值索引数组、字符关联数组。

### 基础知识

- 所谓的数组下标可以视为资料内容在此数组中的识别名称，通常被称为数组下标。
- 当索引值为数值时，也代表此资料内容在数组中的储存位置。
- 数组中有几个索引值就被称为几维数组。

**数组分类**：

在PHP中有两种数组：索引数组和关联数组。

- 索引（indexed）数组的索引值是整数，以0开始。当通过位置来标识东西时用索引数组。
- 关联（associative）数组以字符串做为索引值，关联数组更像操作表。索引值为列名，用于访问列的数据

```
$arr 	= [1,2,3] // 索引数组
$users 	= ['name'=>'向军大叔','age'=>99]; //关联数组
```

**一维数组**

数组值为单个变量（非数组）时，为一维数组

```
$arr = ['name'=>'向军','url'=>'houdunren.com'];
```

**多维数组**

数组的值为数组时，这样的数组为多维数组，嵌套几层即几为数组

```
$users = [
	['name'=>'向军'],
	['name'=>'李四']
];
```

**数组赋值**

```
$arr = [];
$arr[0] = '后盾人';
$arr['url']=>'houdunren.com';
```

### 读取元素

key — 从关联数组中取得键名

```
$arr = ['后盾人','HDCMS','向军大叔'];
echo key($arr); //返回0
```

current — 返回数组中的当前单元

```
$arr = ['后盾人','HDCMS','向军大叔'];
echo current($arr); //返回 '后盾人'
```

next — 将数组中的内部指针向下移动一位，并返回值。没有更多单元时返回 **FALSE**

```
$arr = ['后盾人','HDCMS','向军大叔'];
echo next($arr); //返回 'HDCMS'
```

prev — 将数组的内部指针倒回一位，并返回值。没有更多单元时返回 **FALSE**

```
$arr = ['后盾人','HDCMS','向军大叔'];
var_dump(prev($arr)); //返回 FALSE
```

**指针遍历**

```
$users = [
    ['name'=>'向军大叔','age'=>16],
    ['name'=>'小明','age'=>22],
    ['name'=>'李四','age'=>34],
    ['name'=>'张三','age'=>19],
];
?>
<table border="1">
<tr><th>编号</th><th>姓名</th><th>年龄</th></tr>
<?php while ($user = current($users)):?>
<tr>
	<td><?php echo key($users)+1?></td>
	<td><?php echo $user['name']?></td>
	<td><?php echo $user['age']?></td>
</tr>
<?php  next($users); endwhile;?>
</table>
```

### 遍历数组

#### foreach

```
$users = [
    ['name'=>'向军大叔','url'=>'aoxiangjun.com'],
    ['name'=>'后盾人','url'=>'houdunren.com']
];
foreach ($users as $key=>$user) {
    echo "[{$key}] 姓名:{$user['name']} 网址:{$user['url']} <hr/>";
}
```

#### list

把数组中的值赋给一组变量

```
$arr = ['向军','hdcms'];
list($name, $soft) = $arr;
echo $soft;
```

直接显示第三个

```
$arr = ['向军','hdcms','houdunren.com'];
list(, , $web) = $arr;
echo $web;
```

使用键名

```
$users = [
    ['name'=>'向军大叔','age'=>16],
    ['name'=>'小明','age'=>22],
    ['name'=>'李四','age'=>34],
    ['name'=>'张三','age'=>19],
];
while (list('name'=>$name, 'age'=>$age) = current($users)) {
    echo "name: {$name} <hr/>";
    next($users);
}
```

### 常用函数

下面我们学习常用的数组操作函数，之后你就可以自行参考 [官方手册](http://php.net/manual/zh/ref.array.php) 掌握其他函数了。

#### array_push

将一个或多个单元压入数组的末尾，这是传址操作。

```
$users =['向军大叔','小明'];
array_push($users, '张三');
print_r($users);
```

#### array_pop

弹出数组最后一个单元（出栈），这是传址操作。

```
$users =['向军大叔','小明'];
array_pop($users);
print_r($users);
```

#### array_shift

将数组开头的单元移出数组，这是传址操作。

```
$users =['向军大叔','小明'];
array_shift($users);
print_r($users);
```

#### array_unshift

在数组开头插入一个或多个单元

```
$users =['向军大叔','小明'];
array_unshift($users, '后盾人');
print_r($users);

```

#### count

count — 计算数组中的单元数目，或对象中的属性个数

```
$users = ['向军大叔','小明'];
echo count($users);

```

#### in_array

检查数组中是否存在某个值

```
$allowImageType = ['jpeg','jpg','png'];
$file = 'hdcms.txt';
$ext = strtolower(substr(strrchr($file, '.'), 1));
if (!in_array($ext, $allowImageType)) {
    echo 'is wrong';
}

```

#### array_key_exists

检查数组里是否有指定的键名或索引

```
$allowImageType = ['jpeg'=>2000000,'jpg'=>2000000,'png'=>2000000];
$file = 'hdcms.txt';
$ext = strtolower(substr(strrchr($file, '.'), 1));
if (!array_key_exists($ext, $allowImageType)) {
    echo 'is wrong';
}

```

#### array_keys

```
$allowImageType = ['jpeg'=>2000000,'jpg'=>2000000,'png'=>2000000];
$file = 'hdcms.jpg';
$ext = strtolower(substr(strrchr($file, '.'), 1));
if (!in_array($ext, array_keys($allowImageType))) {
    echo 'is wrong';
}

```

#### array_filter

用回调函数过滤数组中的单元，下面是只获取男生的操作。

```
$users = [
    ['name'=>'向军大叔','sex'=>'男','age'=>20],
    ['name'=>'小丽','sex'=>'女','age'=>33]
];

print_r(array_filter($users, function ($user) {
    return $user['sex']=='男';
}));

```

#### array_map

为数组的每个元素应用回调函数，下面是删除用户年龄的操作。

```
$users = [
    ['name'=>'向军大叔','sex'=>'男','age'=>20],
    ['name'=>'小丽','sex'=>'女','age'=>33]
];

print_r(array_map(function ($user) {
    unset($user['age']);
    return $user;
}, $users));

```

获取所有会员名称

```
$users = [
    ['name'=>'向军大叔','sex'=>'男','age'=>20],
    ['name'=>'小丽','sex'=>'女','age'=>33]
];

print_r(array_map(function ($user) {
    return $user['name'];
}, $users));

```

#### array_values

返回数组中所有的值

```
$formats = array_map(function ($user) {
    return implode('-', array_values($user));
}, $users);
print_r($formats); //输出 Array ( [0] => 向军大叔-男-20 [1] => 小丽-女-33 )


```

#### array_merge

合并一个或多个数组

```
$database = [
    'host'=>'localhost','port'=>3306,'user'=>'root','password'=>''
];

print_r(
    array_merge($database, ['user'=>'hdcms','password'=>'admin888'])
);

```

#### array_change_key_case

将数组中的所有键名修改为全大写或小写

```
//键名转大写
print_r(array_change_key_case($database, CASE_UPPER));

//键名转小写
print_r(array_change_key_case($database, CASE_LOWER));

```

#### 递归改变数组键名

```
$config = [
    'database'=>['host'=>'localhost','port'=>3306,'user'=>'root','password'=>''],
    'app'=>['name'=>'向军大叔','url'=>'http://houdunren.com','app'=>["hdcms"]]
];

function hd_array_change_key_case(array $data, int $type=CASE_UPPER):array
{
    foreach ($data as $k=>$v):
        $action = $type ==CASE_UPPER?'strtoupper':'strtolower';
    	unset($data[$k]);
    	$data[$action($k)] = is_array($v)?hd_array_change_key_case($v, $type):$v;
    endforeach;
    return $data;
}
print_r(hd_array_change_key_case($config));

```

#### 递归改变数组值

```
$config = [
    'database'=>['host'=>'localhost','port'=>3306,'user'=>'root','password'=>''],
    'app'=>['name'=>'向军大叔','url'=>'http://houdunren.com','app'=>["hdcms"]]
];

function hd_array_change_value_case(array $data, int $type=CASE_UPPER):array
{
    foreach ($data as $k=>$v):
        $action = $type ==CASE_UPPER?'strtoupper':'strtolower';
    $data[$k] = is_array($v)?hd_array_change_value_case($v, $type):$action($v);
    endforeach;
    return $data;
}
print_r(hd_array_change_value_case($config));

```

#### array_walk_recursive

对数组中的每个成员递归地应用用户函数，本函数会递归到更深层的数组中去。下面是改变数组键值的操作。

```
$config = [
    'database'=>['host'=>'localhost','port'=>3306,'user'=>'root','password'=>''],
    'app'=>['name'=>'向军大叔','url'=>'http://houdunren.com',['app'=>'hdcms']]
];

function change_array_value(array $data, int $type=CASE_UPPER):array
{
    array_walk_recursive($data, function (&$value, $key, $type) {
        $action = $type==CASE_UPPER?'strtoupper':'strtolower';
        $value=$action($value);
    }, $type);
    return $data;
}
print_r(change_array_value($config));

```

#### var_export

输出或返回一个变量的字符串表示，第二个参数为 `TRUE` 时返回字符串。

```
$config = [
    'database'=>['host'=>'localhost','port'=>3306,'user'=>'root','password'=>''],
    'app'=>['name'=>'向军大叔','url'=>'http://houdunren.com']
];

//生成合法的PHP代码
$configContent = "<?php return ".var_export($config, true).';';
file_put_contents('database.php', $configContent);
```

#### serialize

将数组序列化为字符串。

```
$config = [
    'database'=>['host'=>'localhost','port'=>3306,'user'=>'root','password'=>''],
    'app'=>['name'=>'向军大叔','url'=>'http://houdunren.com',['app'=>'hdcms']]
];
echo serialize($config);
```

#### unserialize

从已存储的表示中创建 PHP 的值，下面是缓存数据的操作实例。

```
$config = [
    'database'=>['host'=>'localhost','port'=>3306,'user'=>'root','password'=>''],
    'app'=>['name'=>'向军大叔','url'=>'http://houdunren.com',['app'=>'hdcms']]
];

function cache(string $name, array $data=null)
{
    $file = 'cache'.DIRECTORY_SEPARATOR.md5($name).'.php';
    if (is_null($data)) {
        $content = is_file($file)?file_get_contents($file):null;
        return unserialize($content)?:null;
    } else {
        return file_put_contents($file, serialize($data));
    }
}

cache('database', $config);
var_dump(cache('database'));
```

> 请尊重版权转载请注明出处： **后盾人 @ houdurnen.com**

# 正则表达式

正则表达式被用来检索或替换那些符合某个模式的文本内容。
许多程序设计语言都支持利用正则表达式进行字符串操作。例如：JavaScript、PHP、ASP、JAVA、Perl、C#、.NET、ColdFusion、Python、Visual Basic、MYSQL、LINUX、VI编辑器等等语言都支持正则表达式。

简单来说正则表达式就是完成字符串的增、删、改、查。

## 定界符

正则表达式语句需要由分隔符（定界符）闭合包裹，分隔符可以使任意非字母数字, 非反斜线, 非空白字符

经常使用的分隔符是正斜线(/), hash符号(#) 以及取反符号(~)。

建议使用//做为定界符,因为与js一致。

```
$status =  preg_match('/houdunren/', 'houdunren.com');
var_dump($status);
```

## 元字符

元字符是正则表达式中的最小元素，只代表单一（一个）字符。下面是元字符列表

| 元字符 | 说明                                  | 范围          |
| ------ | ------------------------------------- | ------------- |
| \d     | 匹配任意一个数字                      | [0-9]         |
| \D     | 与除了数字以外的任何一个字符匹配      | [^0-9]        |
| \w     | 与任意一个英文字母,数字或下划线匹配   | [a-zA-Z_0-9]  |
| \W     | 除了字母,数字或下划线外与任何字符匹配 | [^a-zA-Z_0-9] |
| \s     | 与任意一个空白字符匹配                | [\n\f\r\t\v]  |
| \S     | 与除了空白符外任意一个字符匹配        | [^\n\f\r\t\v] |
| \n     | 换行字符                              |               |
| \t     | 制表符                                |               |

```
var_dump(preg_match('/\d/', '1'));
var_dump(preg_match('/\D/', 'h'));
var_dump(preg_match('/\w/', '_'));
var_dump(preg_match('/\W/', '@'));
var_dump(preg_match('/\s/', ' '));
var_dump(preg_match('/\S/', 'h'));
var_dump(preg_match('/\n/', "\n"));
var_dump(preg_match('/\n/', '
'));
var_dump(preg_match('/\t/', "\t"));
```

## 元字符表（原子表）

在一组字符中匹配某个元字符，在正则表达式中通过元字符表来完成，就是放到方括号中。

| 原子表 | 说明                               |
| ------ | ---------------------------------- |
| []     | 只匹配其中的一个原子               |
| [^]    | 只匹配"除了"其中字符的任意一个原子 |
| [0-9]  | 匹配0-9任何一个数字                |
| [a-z]  | 匹配小写a-z任何一个字母            |
| [A-Z]  | 匹配大写A-Z任何一个字母            |
| .      | 点在正则中表示除换行符外的任意字符 |

匹配聊了 `678`外的任何字符

```
$status = preg_match('/[^678]/', 678);
var_dump($status);
```

匹配大小写字母

```
$status = preg_match('/[a-zA-Z]/', 'a');
var_dump($status);
```

用`.` 匹配字符

```
$status = preg_match('/./', 'houdunren');
var_dump($status);
```

下面是通过原子表拆分字符串

```
$str ="1.jpg@2.jpg@3.jpg#4.jpg";
$arr = preg_split('/[@#]/',$str); //按正则表达式拆分字符串
print_r($arr); //输出结果 Array ( [0] => 1.jpg [1] => 2.jpg [2] => 3.jpg [3] => 4.jpg )
```

## 原子组

- 如果一次要匹配多个元子，可以通过元子组完成
- 原子组与原子表的差别在于原子组一次匹配多个元子，而原子表则是匹配成功表中的一个元字符就可以
- 元字符组用（）表示

下面是使用正则表达式将`houdunwang` 字符中的 `houdun` 描红。

```
$str = "官网www.houdunwang.com 论坛http://bbs.houdunwang.com，我在网名叫houdun";
$preg = "/(houdun)wang/is";
$newStr= preg_replace($preg, '<span style="color:#f00">\1</span>wang', $str);
echo $newStr;
```

## 匹配字符边界

如果想匹配字符的边界，边界包括空格、标点符号、换行等，可以使用正则表达式的匹配字符边界修饰符如下。

| 符号 | 说明                         |
| ---- | ---------------------------- |
| ^    | 匹配字符串的开始             |
| $    | 匹配字符串的结束，忽略换行符 |

```
$status = preg_match('/^houdunren$/', 'houdunren');
var_dump($status); //返回真
```

## 选择修释符

| 这个符号带表选择修释符，也就是 | 左右两侧有一个匹配到就可以。

下面是通过选择修释符将域名修改为 `houdunren`

```
$str = "http://www.baidu.com与新浪网http://www.sina.com";
$preg = "/\.(baidu|sina)\./is";
echo preg_replace($preg, '.houdunren.', $str);
```

匹配域名后缀

```
$str = '来了，老弟！有问题就上 houdunren.com 或 houdunwang.com 我们在那里等你';
$preg = '/(houdunren|houdunwang)\.com/';
$replace = '<a href="http://www.\1.com">\1.com</a>';
echo preg_replace($preg, $replace, $str);
```

## 重复匹配

如果要重复匹配一些内容时我们要使用重复匹配修饰符，包括以下几种。

因为正则最小单位是元字符，而我们很少只匹配一个元字符如a、b所以基本上重复匹配在每条正则语句中都是必用到的内容

| 符号  | 说明             |
| ----- | ---------------- |
| *     | 重复零次或更多次 |
| +     | 重复一次或更多次 |
| ?     | 重复零次或一次   |
| {n}   | 重复n次          |
| {n,}  | 重复n次或更多次  |
| {n,m} | 重复n到m次       |

```
var_dump(preg_match('/^.*$/', '')); //* 零个及空字符串也是可以的
var_dump(preg_match('/^[0-9]+$/', '1976')); // 返回真
var_dump(preg_match('/^9?$/', '99')); // 返回假
var_dump(preg_match('/^9{2}$/', '99')); // 返回真
var_dump(preg_match('/^[0-9]{2,}$/', '123')); //返回真
var_dump(preg_match('/^[0-9]{2,3}$/', '1234')); // 返回假，只能2~3位
```

下面匹配域名操作

```
$web = 'sina.com';
var_dump(preg_match('/^[a-z-0-9-]+\.(com|net|com\.cn|org|cn)$/', $web));
```

下面是把 `h1`标签内容加上超链接

```
$str = <<<html
<h1>hello houdunren</h1>
html;
echo preg_replace('/<h1>(.+)<\/h1>/', '<a href="http://www.houdunren.com">\1</a>', $str);
```

## 禁止重复匹配

正则表达式在进行重复匹配时，默认是贪婪匹配模式，也就是说会尽量匹配更多内容，但是有的时候我们并不希望他匹配更多内容，这时可以通过?进行修饰来禁止重复匹配。

| 符号   | 说明                            |
| ------ | ------------------------------- |
| *?     | 重复任意次，但尽可能少重复      |
| +?     | 重复1次或更多次，但尽可能少重复 |
| ??     | 重复0次或1次，但尽可能少重复    |
| {n,m}? | 重复n到m次，但尽可能少重复      |
| {n,}?  | 重复n次以上，但尽可能少重复     |

```
$str = '123456';
preg_match('/\d+?/',$str,$matches);
print_r($matches);
```

因为增加了 `?` 所以只匹配数字1

下面是使用禁止贪婪符替换将h1标签内容倾斜处理

```
$str = "<h1>你好</h1><h1>向军大叔</h1>";
$preg = '/<h1>(.*?)<\/h1>/';
$replace = '<h1><em>\1</em></h1>';
echo preg_replace($preg,$replace,$str);
```

下面是替换h1-h6标签内容，就不需要使用禁止贪婪符了

```
$str = "<h1>你好</h1><h2>向军大叔</h2>";
$preg = '/<h([1-6])>(.*)<\/h\1>/';
$replace = '<h\1><em>\2</em></h\1>';
echo preg_replace($preg,$replace,$str);
```

## 模式修正符

正则表达式在执行时会按他们的默认执行方式进行，但有时候默认的处理方式总不能满足我们的需求，所以可以使用模式修正符更改默认方式。

| 符号 | 说明                                                         |
| ---- | ------------------------------------------------------------ |
| i    | 不区分大小写字母的匹配                                       |
| s    | 将字符串视为单行，换行符做普通字符看待，使“.”	匹 配任何字符 |
| x    | 忽略空白及#符号，根据此特性可以添加正则注释                  |
| m    | ^与$符匹配按行匹配                                           |
| A    | 强制从字符串开始匹配（多行时默认以每行开始设置）             |
| D    | 以$结尾时不允许后面有换行（使用\m时无效）                    |

\i修正符不匹分大小示例

```
$str = 'https://www.HoudunREN.com 后盾人';
$preg = '/https:\/\/www.houdunren.com/i';
$replace= '<a href="\0">\0</a>';
echo preg_replace($preg,$replace,$str);

```

\s 将字符串示为单行操作

```
$preg = '#(<h1>)(.*?)(</h1>)#s';
preg_match_all($preg,$str,$matches);
//print_r($matches);

$replace = '\1<span style="color:red">\2\3';
echo preg_replace($preg,$replace,$str);

```

 `\m` 使用 ^ 与 $ 按单行操作文本

```
$str = <<<php
#1 2022-02-12
后盾人
@#100
雅虎网
#2 2033-09-11
向军大叔
php;
$preg = '/^#\d+.*[\r|\n]$/m';
preg_match_all($preg, $str, $matches);
print_r($matches);

```

\x字符忽略空白和添加正则注释

1. 添加注释

   ```
   $str='houdunren.com';
   $preg = '/^h
      # 这是匹配以 h 开始的内容
   /x';
   echo preg_replace($preg,'',$str);
   
   ```

2. 当设置了\x后`#` 会被忽略，如果正则中使用#需要转义处理

   ```
   $str=<<<php
   #1
   后盾人#1
   #2
   向军大叔#2
   php;
   $preg = '/^
   \#\d  #匹配以数字开始
   +.* $ #后跟任何字符
   /mx';
   echo preg_replace($preg,'',$str);
   
   ```

\U 与?功能相似意为禁止贪婪匹配

```
$str = <<<php
<h1>后盾人</h1>
<h1>向军大叔</h1>
php;
;
$preg = '#<h1>.*</h1>#sU';
preg_match_all($preg,$str,$matches);
print_r($mat
ches);

```

\A 与 ^限定符使用效果相似，必须以目标字符串开始。下面是验证邮箱例子

```
$str = '2300071698@qq.com';
$preg = '/\w+@[\w\.]+/A';
preg_match_all($preg,$str,$matches);
print_r($matches);

```

\D 修正符使用不允许以换行结束

```
$str = <<<php
3a\n
php;
$preg = '/\d+a$/D';
preg_match_all($preg,$str,$matches);
print_r($matches);

```



## 常用函数

### preg_match

获取第一个匹配的内容

```
$str= '1@2@3';
preg_match('/\d+/',$str,$matches);
print_r($matches);

```

### preg_match_all

获取所有匹配的内容

```
$str= '1@2@3';
preg_match('/\d+/',$str,$matches);
print_r($matches);

```

### preg_split	

通过正则表达式拆分字符串

```
$str= '1@2#3';
$arr = preg_split('/@|#/',$str);
print_r($arr);

```

### preg_replace	

通过正则表达式替换

```
$str= '1@2#3';
echo preg_replace('/@|#/','-',$str);

```

### preg_replace_callback

使用回调函数进行替换操作

```
$str = '1@2@3';
echo preg_replace_callback('/\d+/',function ($matches) {
	return $matches[0]+100;
}, $str);

```

# 文件与目录

> 创作不易，转载请注明出处： 后盾人 @ houdurnen.com

PHP提供了完善的操作文件与目录机制。

## 基础函数

### disk_total_space

本函数返回的是该目录所在的磁盘分区的总大小，因此在给出同一个磁盘分区的不同目录作为参数所得到的结果完全相同。

### disk_free_space

参数是一个目录的字符串。该函数将根据相应的文件系统或磁盘分区返回可用的字节数。

### 自动添加单位

```
/**
 * 获取有单位的大小
 * @param int $total 大小单位字节
 * @return string|null
 */
function space_total(int $total): ?string
{
    $config = [3 => 'GB', 2 => 'MB', 1 => 'KB'];
    foreach ($config as $num => $unit) {
        if ($total > pow(1024, $num)) {
            return round($total / pow(1024, $num)) . $unit;
        }
    }
    return '0KB';
}

echo space_total(disk_total_space('.'));
```

### filesize

取得指定文件的大小。

```
$filename = 'somefile.txt';
echo $filename . ': ' . filesize($filename) . ' bytes';
```

### fopen

打开文件或者 URL。如果打开的是URL需要保证PHP.INI配置项`allow_url_fopen ` 开启。

在操作二进制文件时如果没有指定 *'b'* 标记，可能会碰到一些奇怪的问题，包括坏掉的图片文件以及关于 *\r\n* 字符的奇怪问题。

| **mode** | **说明**                                                     |
| -------- | ------------------------------------------------------------ |
| *'r'*    | 只读方式打开，将文件指针指向文件头。                         |
| *'r+'*   | 读写方式打开，将文件指针指向文件头。                         |
| *'w'*    | 写入方式打开，将文件指针指向文件头并将文件大小截为零。如果文件不存在则尝试创建之。 |
| *'w+'*   | 读写方式打开，将文件指针指向文件头并将文件大小截为零。如果文件不存在则尝试创建之。 |
| *'a'*    | 写入方式打开，将文件指针指向文件末尾。如果文件不存在则尝试创建之。 |
| *'a+'*   | 读写方式打开，将文件指针指向文件末尾。如果文件不存在则尝试创建之。 |
| *'x'*    | 创建并以写入方式打开，将文件指针指向文件头。如果文件已存在，则 **fopen()** 调用失败并返回 **FALSE**，并生成一条 **E_WARNING** 级别的错误信息。如果文件不存在则尝试创建之。 |
| *'x+'*   | 创建并以读写方式打开，其他的行为和 *'x'* 一样。              |

### fread

返回所读取的字符串， 或者在失败时返回 **FALSE**。

```
$filename = 'a.txt';
$handle = fopen($filename,'r');
echo fread($handle,filesize($filename));
```

### fseek

在文件指针中定位，注意移动到 EOF 之后的位置不算错误。

```
$filename = 'a.txt';//a.txt内容为 abc
$handle = fopen($filename, 'r+');
fseek($handle, 1);
//移动指针后读取为bc
echo fread($handle, filesize($filename));
```

### fwrite

写入文件，返回写入的字符数，出现错误时则返回 **FALSE** 。

在区分二进制文件和文本文件的系统上（如 Windows） 打开文件时，[fopen()](https://www.php.net/manual/zh/function.fopen.php) 函数的 mode 参数要加上 'b'。

```
$handle = fopen('xj.txt','r+');
fwrite($handle,'aa');
fseek($handle,0);
echo fread($handle,999);
```

### fclose

fclose — 关闭一个已打开的文件指针

```
$handle = fopen('somefile.txt', 'r');
fclose($handle);
```

### feof

测试文件指针是否到了文件结束的位置

```
$handle = fopen('xj.txt','rb');
while(!feof($handle)){
    echo fread($handle,1);
}
```

### fgetc

读取一个字符

```
$handle = fopen('xj.txt','rb');
while($c = fgetc($handle))
	echo $c;
```

### fgets

读取一行内容

```
$handle = fopen('xj.txt','rb');
while($c = fgets($handle))
	echo $c;
```

### fgetss

从文件指针中读取一行并过滤掉 HTML 标记。

参数分别表示：资源对象、读取数量、允许标签。

```
$handle = fopen('xj.html','rb');
while(!feof($handle)){
    echo fgetss($handle,20,'<h1><title>');
}
```

### fgetcsv

从文件指针中读入一行并解析 CSV 字段。

```
$handle = fopen('user.csv','rb');
$users = fgetcsv($handle,0,',');
print_r($users);
```

### readfile

读取文件所有内容

```
<?php
header('Content-type:image/jpeg');
readfile('user.jpeg');
```

### flock 

锁定文件操作，如果使用`flock` 锁定文件，必须保证在所有使用文件地方执行 `flock` 才有意义。如果过早的系统因为不支持锁定操作，函数执行将没有效果如FAT系统。

| 锁定方式    | 说明                                                         |
| ----------- | ------------------------------------------------------------ |
| **LOCK_SH** | 取得共享锁定（读取的程序）                                   |
| **LOCK_EX** | 取得独占锁定（写入的程序)                                    |
| **LOCK_UN** | 释放锁定（无论共享或独占）                                   |
| **LOCK_NB** | 无法建立锁定时，此操作可不被阻断，马上返回进程。通常与LOCK_SH或LOCK_EX 做OR(\|）组合使用。（Windows 系统上还不支持） |

#### 读锁

1.php 文件内容：

```
<?php
$handle = fopen('xj.txt','rb');
$stat = flock($handle,LOCK_SH);
sleep(5);
echo fgetss($handle);
flock($handle,LOCK_UN);
```

2.php

```
<?php
$handle = fopen('xj.txt','rb');
$stat = flock($handle,LOCK_SH);
echo fgetss($handle);
flock($handle,LOCK_UN);
```

读锁不能写入文件可以读取文件，并不会阻塞。

#### 写锁

1.php 文件内容：

```
<?php
$handle = fopen('xj.txt','rb');
$stat = flock($handle,LOCK_EX);
sleep(5);
echo fgetss($handle);
flock($handle,LOCK_UN);
```

2.php

```
<?php
$handle = fopen('xj.txt','rb');
$stat = flock($handle,LOCK_SH);
echo fgetss($handle);
flock($handle,LOCK_UN);
```

写锁为独占，所以读取文件也会阻塞，前一个文件执行完后才可以执行第二个。

#### 防止阻塞

1.php

```
<?php
$handle = fopen('xj.txt','ab');
$stat = flock($handle,LOCK_EX);
sleep(5);
echo fgetss($handle);
flock($handle,LOCK_UN);

```

2.php

```
<?php
$handle = fopen('xj.txt','ab');
$stat = flock($handle,LOCK_SH | LOCK_NB,$wouldblock);
if($stat){
    $d = fwrite($handle,'aoxiangjun.com');
    echo fgetss($handle);
}else{
    echo 'file is locked';
}
flock($handle,LOCK_UN);

```

- 使用LOCK_NB当文件被其他请求锁定时，脚本继续向下执行，锁定失败。
- 阻塞时 $wouldblock 亦是为真

### is_writable

判断给定的文件名是否可写

```
<?php
$filename = 'test.txt';
if (is_writable($filename)) {
    echo 'The file is writable';
} else {
    echo 'The file is not writable';
}

```

### is_readable

判断给定文件名是否可读

```
<?php
$filename = 'test.txt';
if (is_readable($filename)) {
    echo 'The file is readable';
} else {
    echo 'The file is not readable';
}

```

### file_exists

检查文件或目录是否存在

```
<?php
$filename = '/path/to/foo.txt';

if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exist";
}

```

### is_file

判断给定文件名是否为一个正常的文件。

### is_dir

判断给定文件名是否是一个目录。

### filesize

取得指定文件的大小，返回文件大小的字节数。

```
echo filesize('xj.txt');

```

### file_put_contents

将一个字符串写入文件。

| 参数   | 说明                                                         |
| ------ | ------------------------------------------------------------ |
| 参数一 | 文件名                                                       |
| 参数二 | 写入的字符串                                                 |
| 参数三 | FILE_APPEND：如果文件 `filename` 已经存在，追加数据而不是覆盖。<br />LOCK_EX：在写入时获得一个独占锁。 |

### file_get_content

 将整个文件读入一个字符串，如果打开远程文件需要开启php.ini中的 `allow_url_fopen` 选项。

### filemtime

本函数返回文件中的数据块上次被写入的时间，也就是说，文件的内容上次被修改的时间。

下面是缓存文件的操作代码，实际开发中的缓存控制还要注意很多细节，下面是核心思路代码。

```
<?php
//缓存文件存在并且没有过期时使用缓存文件
if (is_file('1.cache.php') && filemtime('1.cache.php') > (time() - 10)) {
    include '1.cache.php';
} else {
    //开启缓存区并保存解析数据到缓存文件
    ob_start();
    include '1.blade.php';
    $content = ob_get_clean();
    echo $content;
    file_put_contents('1.cache.php', $content);
}

```

### var_export

输出或返回一个变量的字符串表示。

下面是将数组保存到文件中的代码，并支持include 获取数组数据。

```
<?php
$user = [
    ['name'=>'向军大叔'],
    ['name'=>'小明']
];
$content =var_export($user,true);
file_put_contents('users.php','<?php return '.$content.';');

```

### basename

返回路径中的文件名部分

```
echo basename(__FILE__);

```

### dirname

 返回路径中的目录部分

```
echo dirname(__FILE__);

```

### mkdir

支持递归的目录创建，参数分别是：目录、权限位、递归创建

```
mkdir('a/b/c',0755,true);

```

### rmdir

删除指定的目录，该目录必须是空的，而且要有相应的权限。

```
rmdir('views');

```

### rename

 重命名一个文件或目录，也可以进行文件移动。

```,
// 将1.html更名为a.html
rename('1.html','a.html');

//移动文件1.html到目录houdunren中
rename('1.html','houdunren/1.html');

```

### copy

复制文件

```
//复制1.blade.php到目录f中
copy('1.blade.php','f/1.blade.php');

```

## 常用常量

### _\_DIR\_\_

获取文件所有目录。

### _\_FILE\_\_ 

获取文件的完整路径，包含文件名。

### DIRECTORY_SEPARATOR

目录分隔符，在 Windows 中，斜线（*/*）和反斜线（\）都可以用作目录分隔符，但是在linux上使用`/`，此常量会自动根据系统设置为合适的分隔符。

## 文件遍历

### opendir

opendir 函数类似于 fopen 操作方式，可能获取目录指针读取目录，下面是操作示例。

```
$handle = opendir('../php');
while (false!==($file = readdir($handle))) {
    if (!in_array($file, ['.','..'])) {
        echo filetype($file)."\t".$file.'<br/>';
    }
}
closedir($handle);

```

### scandir

列出指定路径中的文件和目录。

```
foreach (scandir('../php') as $file) {
    if (!in_array($file, ['.','..'])) {
        echo filetype($file)."\t\t".$file.'<hr/>';
    }
}

```

### glob使用

寻找与模式匹配的文件路径。

参数顺序为：参数一文件路径，参数二选项标记

下面是常用选项标记

| 选项         | 说明                                                         |
| ------------ | ------------------------------------------------------------ |
| GLOB_MARK    | 在每个返回的项目中加一个斜线                                 |
| GLOB_NOSORT  | 按照文件在目录中出现的原始顺序返回（不排序）                 |
| GLOB_NOCHECK | 如果没有文件匹配则返回用于搜索的模式                         |
| GLOB_ERR     | 停止并读取错误信息（比如说不可读的目录），默认的情况下忽略所有错误 |
| GLOB_BRACE   | 设置多个匹配模式，如：{\*.php,\*.txt}                        |

遍历目录

```
$files = glob('../../*');
print_r($files);

```

指定检索文件类型

```
$files = glob('*.php', GLOB_ERR);

```

设置多个匹配模式

```
$files = glob("{*.php,*.txt}", GLOB_BRACE);
print_r($files);

```

### 目录大小

```
function dirSize($dir):int
{
    $size= 0;
    foreach (glob($dir.'/*') as $file) {
        $size += is_file($file)?filesize($file):dirSize($file);
    }
    return $size;
}
echo round(dirSize('/home/vagrant')/1024/1024).'MB';

```

### 删除目录

```
function delDir($dir):bool
{
    if (!is_dir($dir)) {
        return true;
    }
    foreach (glob($dir.'/*') as $file) {
        is_file($file)?unlink($file):delDir($file);
    }
    return rmdir($dir);
}
delDir('../php2');

```

### 复制目录

```
function copyDir($dir, $to):bool
{
    is_dir($to) or mkdir($to, 0755, true);
    foreach (glob($dir.'/*') as $file) {
        $target = $to.'/'.basename($file);
        is_file($file)?copy($file, $target):copyDir($file, $target);
    }
    return true;
}
copyDir('../php', '../php2');

```

### 移动目录

移动目录分两步执行，第一步是复制目录，第二步是删除目录，所以使用上面两个函数的综合即可以。

```
function moveDir($dir, $to):bool
{
    copyDir($dir, $to);
    return delDir($dir);
}

```

# 文件上传

> 创作不易，转载请注明出处： 后盾人 @ houdurnen.com

## 环境配置

修改PHP.ini配置文件可以定制上传机制，通过 phpinfo() 函数可以查看到PHP.ini文件所在位置。

| 配置                | 说明                                                         |
| ------------------- | ------------------------------------------------------------ |
| file_uploads        | 是否允许上传文件，On开启 Off禁止上传                         |
| upload_tmp_dir      | 文件上传过程中临时保存的目录，默认保存位置为 /tmp            |
| upload_max_filesize | 允许上传的最大文件大小，可以使用 K、M、G单位如 2M            |
| post_max_size       | PHP将接受的最大POST数据大小，包括上传文件、表单数据。所以post_max_size要大于 upload_max_filesize |
| max_file_uploads    | 单个请求时，允许上传的最大文件数量                           |

下面是一个简单上传表单示例

```
<form action="2.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>
	<input type="file" name="up">
	<button>提交</button>
</form>
```

MAX_FILE_SIZE 表单用来设置允许的上传大小，单位为字节。如果发生错误，错误码为2。

## 超全局数组

上传的文件保存在 `$_FILES` 超全局数组中，具体参数说明如下：

| 选项     | 说明               |
| -------- | ------------------ |
| tmp_name | 临时文件名         |
| name     | 上传文件原文件名   |
| type     | 文件MIME类型       |
| error    | 错误编号           |
| size     | 文件大小，单位字节 |

## 错误说明

上传出错会在$_FILES['error'] 选项中体现，具体错误说明如下：

| 错误                      | 错误码 | 说明                                                         |
| ------------------------- | ------ | ------------------------------------------------------------ |
| **UPLOAD_ERR_OK**         | 0      | 没有错误发生                                                 |
| **UPLOAD_ERR_INI_SIZE**   | 1      | 上传的文件超过了 php.ini 中 [upload_max_filesize](https://www.php.net/manual/zh/ini.core.php#ini.upload-max-filesize) 选项限制的值 |
| **UPLOAD_ERR_FORM_SIZE**  | 2      | 上传文件的大小超过了 HTML 表单中 *MAX_FILE_SIZE* 选项指定的值 |
| **UPLOAD_ERR_PARTIAL**    | 3      | 文件只有部分被上传                                           |
| **UPLOAD_ERR_NO_FILE**    | 4      | 没有文件被上传                                               |
| **UPLOAD_ERR_NO_TMP_DIR** | 6      | 找不到临时文件夹                                             |
| **UPLOAD_ERR_CANT_WRITE** | 7      | 文件写入失败                                                 |

## 上传安全

上传通过 `is_uploaded_file` 与 `move_uploaded_file`  完成，函数会检测文件是否是合法的上传文件，以保证安全。

```
if ($_FILES['up']['error'] > 0) {
    die('上传失败，请检查文件类型或大小');
}
$uploadFile = 'uploads/' . time() . '.' . pathinfo($_FILES['up']['name'])['extension'];
if (is_uploaded_file($_FILES['up']['tmp_name'])) {
    if (move_uploaded_file($_FILES['up']['tmp_name'], $uploadFile)) {
        die('上传成功:' . $uploadFile);
    }
}
die('上传错误');
```

## 处理类

下面是支持单文件、多文件上传的处理类。

**前台代码**

```
<form action="controller.php" method="post" enctype="multipart/form-data">
        <input type="file" name="up">
        <input type="file" name="image[]">
        <input type="file" name="image[]">
        <button class="btn">提交</button>
</form>
```

**后台代码**

```
<?php
namespace Hd;

class Uploader
{
    protected $files = [];
    public function make()
    {
        $saveFiles = [];
        $this->format();
        foreach ($this->files as $k => $file) {
            if ($file['error'] == 0) {
                if (is_uploaded_file($file['tmp_name'])) {
                    $save = 'upload/' . $k . time() . '.' . pathinfo($file['name'])['extension'];
                    if (move_uploaded_file($file['tmp_name'], $save)) {
                        $saveFiles[] = $save;
                    }
                }
            }
        }
        return $saveFiles;
    }
    /**
     * 格式化文件
     */
    public function format(): array
    {
        $files = [];
        foreach ($_FILES as  $field) {
            if (is_array($field['name'])) {
                foreach ($field['name'] as $id => $name) {
                    $files[] = [
                        'name' => $name,
                        'type' => $field['type'][$id],
                        'error' => $field['error'][$id],
                        'size' => $field['size'][$id],
                        'tmp_name' => $field['tmp_name'][$id],
                    ];
                }
            } else {
                $files[] = $field;
            }
        }
        return $this->files = $files;
    }
}
```

## 文件下载

```
<?php
$file="houdunwang.jpg";

//指定下载文件类型为二进制
header("Content-type:application/octet-stream");

//获取文件名
$fileName = basename($file);

//下载窗口显示文件名
header("Content-Disposition:attachment;filename={$fileName}");

//文件尺寸单位
header("Accept-ranges:bytes");

//文件大小
header("Accept-length:".filesize($file));

//读取文件内容供下载
readfile($file);
```

# 会话控制

> 创作不易，转载请注明出处： 后盾人 @ houdurnen.com

## HTTP

因为 `HTTP` 是无状态的协议，没有办法记录多个事务请求间的状态。即访问一个页面请求后再请求另一个页面时无法判断两次请求来自同一下用户。

**会话原理**

在PHP中实现会话的原理是为用户分配一个唯一的加密ID，并保存在用户客户端，并在整个会话时间周期内有效。

一般情况下使用cookie来进行保存，但也可以通过url传递。

用户通过携带会话ID到服务器获取内容。

## COOKIE

cookie是客户端存储数据的手段，并在请求服务器时自动携带cookie数据。

### 设置

PHP中使用 setcookie() 函数用户客户端cookie数据。

```
setcookie ( string $name [, string $value = "" [, int $expires = 0 [, string $path = "" [, string $domain = "" [, bool $secure = FALSE [, bool $httponly = FALSE ]]]]]] ) : bool
```

参数说明如下：

| 参数         | 说明                                                         |
| ------------ | ------------------------------------------------------------ |
| name         | Cookie的名称                                                 |
| value        | cookie的价值。该值存储在客户端计算机上; 不要存储敏感信息     |
| expires      | Cookie过期的时间。这是一个Unix时间戳，可以使用[time（）](https://www.php.net/manual/en/function.time.php)函数加上希望它到期之前的秒数来设置它。 |
| **path**     | 服务器上可以使用cookie的路径。如果设置为*“/”*，则cookie将在整个范围内可用 |
| **domain**   | cookie可用的域。（例如*“www.houdunren.com”*）将使cookie可用于该子域及其所有其他子域（即w2.www.houdunren.com）。要使cookie可用于整个域（包括其所有子域），只需将值设置为域名（在本例中为*“houdunren.com”*） |
| **secure**   | 表示cookie应仅通过客户端的安全HTTPS连接传输                  |
| **httponly** | 当**TRUE**cookie只能通过HTTP协议访问时。这意味着脚本语言（例如JavaScript）无法访问cookie。 |

### 读取

因为cookie保存在客户端并在请求时提交到后台服务器，所以可以在前台与后台访问到cookie。

前台使用 `document.cookie` 获取cookie数据

```
document.cookie
```

后台使用超全避数组$_COOKIE读取

```
print_r($_COOKIE);
```

### 使用

设置会话cookie，当关闭浏览器时自动删除

```
setcookie('web','houdunren.com');
```

设置七天内有效的cookie

```
setcookie('web','houdunren.com',time()+60*60*24*7);
```

只允许cookie在 `/app ` 访问路径中有效

```
setcookie('web','houdunren.com',0,'/app')
```

设置访问域名

```
setcookie('web','hdcms.com',0,'/','php.test')
```

设置只允许https访问

```
setcookie('web','hdcms.com',0,'/','',true);
```

不允许javascript操作cookie

```
setcookie('web','hdcms.com',0,'','',false,false,true);
```

将`cookie`的到期时间设置为过去时间，就可以删除cookie。

```
setcookie('name','',1);
```

## SESSION

session是服务器会话状态，可用于记录访问用户后台会话数据。

### 基本使用

#### 开启会话

必须要开启 SESSION 才可以使用，有两种方法可以开启会话。

1. 使用脚本开启会话，要保证在使用会话的所有脚本中执行。

```
session_start();
```

2. 通过修改php.ini配置项 `session.auto_start`，自动开启会话（不建议使用）

#### 会话变量

使用超全局数组 `$_SESSION` 来使用会话变量。

设置变量

```
$_SESSION['name']='houdunren.com';
```

删除变量

```
unset($_SESSION['name']);
```

删除所有变量

```
$_SESSION = [];
# 或使用函数删除
session_destroy();
```

### 常用函数

#### session_save_path

设置服务器会话数据储存目录，必须在session_start前使用。

#### session_id

通过 `session_id` 函数来获取/设置当前会话 ID。

#### session_name

获取或设置会话COOKIE名称，如果设置会话名称则需要在session_id前调用。

### 垃圾回收

#### session.gc_probability

session清除无效session的基率。

#### session.gc_divisor 

启动垃圾回收程序的概率。概率计算公式为：session.gc_probability/session.gc_divisor，如果网站访问量大建议将概率降低如 1/1000~5000。

#### session.gc_maxlifetime

session文件过期时间，超过这个时间没有使用的session将视为垃圾，将在下次垃圾回收时删除。

### 自定义驱动

自定义SESSION处理驱动可以让我们更灵活的管理SESSION，并更好的服务我们网站业务。

```
<?php
class FileHandle implements SessionHandlerInterface
{
    //写入目录
    protected $path = 'session';
    //过期时间
    protected $maxlifetime = 1440;
    /**
     * 构建函数
     *
     * @param string $path 保存目录
     * @param integer $maxlifetime 过期时间
     */
    public function __construct(string $path = 'session', int $maxlifetime = 1440)
    {
        $this->path = realpath($path);
        $this->maxlifetime = $maxlifetime;
    }
    /**
     * 关闭
     *
     * @return void
     */
    public function close()
    {
        return true;
    }
    /**
     * 销毁
     *
     * @param [type] $session_id
     * @return void
     */
    public function destroy($session_id)
    {
        return (bool)@unlink($this->path . '/' . $session_id);
    }
    /**
     * 垃圾回收
     *
     * @param [type] $maxlifetime
     * @return void
     */
    public function gc($maxlifetime)
    {
        foreach (glob($this->path . '/*') as $file) {
            if (filemtime($file) + $this->maxlifetime < time()) {
                @unlink($file);
            }
        }
        return true;
    }
    /**
     * 开启
     *
     * @param [type] $save_path
     * @param [type] $session_name
     * @return void
     */
    public function open($save_path,  $session_name)
    {
        is_dir($this->path) or mkdir($this->path, 0755, true);
        return true;
    }
    /**
     * 读取会话数据
     *
     * @param [type] $session_id
     * @return void
     */
    public function read($session_id)
    {
        return file_get_contents($this->path . '/' . $session_id);
    }
    /**
     * 写入会话
     *
     * @param [type] $session_id
     * @param [type] $session_data
     * @return void
     */
    public function write($session_id,  $session_data)
    {
        return (bool)file_put_contents($this->path . '/' . $session_id, $session_data);
    }
}
```

调用方法

```
<?php
include 'Session.php';
//声明会话引擎
session_set_save_handler(new FileHandle);
session_start();
$_SESSION['web'] = 'houdunren.com';
$_SESSION['cms'] = 'hdcms.com';

print_r($_SESSION);
```

# 图像处理

> 创作不易，转载请注明出处： 后盾人 @ houdurnen.com

## 配置环境

PHP中图像处理需要GD库的支持。

在windows系统中修改php.ini文件，删除 extension=php_gd2.dll 前面的`;`开启图像处理支持。

centos中使用 `yum install php-gd*` 

ubuntu系统中使用 `apt-get install php7.3-gd`

**检测GD库是否加载**

```
$has = extension_loaded('GD');
var_dump($has);
```

## 使用方法

PHP创建图像步骤

1. 发送HTTP头信息，声明内容为图像
2. 创建画布
3. 创建绘图所需要的颜色
4. 绘图（填充画布、画圆、画方块、画线条、画布上写字）
5. 输出图像
6. 释放画布资源

### 头信息

通过header() 函数告诉浏览器，输出的是一个图像而不是文本或HTML，这样浏览器就可以正常显示图像了。

- header('Content-type:image/gif');
- header('Content-type:image/jpeg');
- header('Content-type:image/png');

```
header('Content-type:image/jpeg');
readfile('user.jpeg');
```

### 创建画布

imageCreateTrueColor(width,height)

- 传入的两个参数分别为画布的宽和高，在绘图时超出宽高的部分将不予显示，且此尺寸即为生成图片文件时的尺寸。
- 返回值为资源类型。

### 设置颜色

imageColorAllocate(img_resource,R,G,B)

- 颜色从属于某个图像资源而存在。
- 颜色实际上是一个整形数值。
- 颜色的后三个参数需传入值的范围是0~255

### 填充颜色

imageFill(img_resource,x,y,color)

- (x,y)表示从哪个点开始填充颜色的坐标
- 不填充画布的话，默认是黑色

```
header('Content-type:image/jpeg');
$res = imagecreatetruecolor(1000, 500);
$red = imagecolorallocate($res, 255, 0, 0);
imagefill($res, 0, 0, $red);
imagejpeg($res);
```

### 绘制矩形

**绘制空心矩形**

- imageRectangle(img_res,x1,y1,x2,y2,color)

```
header('Content-type:image/jpeg');
$res = imagecreatetruecolor(1000, 500);
$red = imagecolorallocate($res, 255, 0, 0);
$green = imagecolorallocate($res, 0, 255, 0);
imagefill($res, 0, 0, $red);
imagerectangle($res, 100, 100, 200, 200, $green);
imagejpeg($res);
```

**绘制填充好的实心矩形**

imageFilledRectangle (img_res,x1,y1,x2,y2,color)

- (x1,y1)为左上角坐标， (x2,y2)为右下角坐标

```
header('Content-type:image/jpeg');
$res = imagecreatetruecolor(1000, 500);
$red = imagecolorallocate($res, 255, 0, 0);
$green = imagecolorallocate($res, 0, 255, 0);
imagefill($res, 0, 0, $red);
imagefilledrectangle($res, 100, 100, 300, 300, $green);
imagejpeg($res);
```

### 绘制圆形

绘制空心圆形

- imageEllipse(img_res,x,y,w,h,color)

绘制填充好的实心圆

- imageFilledEllipse(img_res,x,y,w,h,color)

说明：

- (x,y)为圆心坐标。 w为宽度，h为高度

```
header('Content-type:image/jpeg');
$res = imagecreatetruecolor(500, 500);
$red = imagecolorallocate($res, 255, 0, 0);
$green = imagecolorallocate($res, 0, 255, 0);
imagefill($res, 0, 0, $red);
imageellipse($res, 250, 250, 100, 100, $green);
imagejpeg($res);
```

### 绘制线条

imageLine(img_res,x1,y1,x2,y2,color)

- (x1,y1)为起始点坐标
- (x2,y2)为结束点坐标

```
$res = imagecreatetruecolor(500, 500);
$red = imagecolorallocate($res, 255, 0, 0);
$green = imagecolorallocate($res, 0, 255, 0);
imagefill($res, 0, 0, $red);
imageline($res, 0, 0, 499, 499, $green);
imagepng($res);
```

### 绘制像素

bool imagesetpixel ( resource $image , int $x , int $y , int $color )

- (x1,y1)为点坐标

```
header('Content-type:image/jpeg');
$res = imagecreatetruecolor(500, 500);
$red = imagecolorallocate($res, 255, 0, 0);
$green = imagecolorallocate($res, 0, 255, 0);
imagefill($res, 0, 0, $red);
for ($i = 0; $i < 600; $i++) {
    imagesetpixel($res, mt_rand(0, 500), mt_rand(0, 500), $green);
}
imagepng($res);
```

### 输出图像

输出不同格式的图像用不同的方法：

- imagegif(img_resource[,filename])
- imagejpeg(img_resource[,filename])
- imagepng(img_resource[,filename])
- imagebmp(img_resource[,filename])
- 当设置第二个参数时表示储存文件，如果存在同名文件会覆盖

### 释放图像

imageDestroy(img_resource)

- 图像输出完毕及时释放资源，把内存空间留给更需要的程序。

### 输入文本

array imagettftext ( resource $image , float $size , float $angle , int $x , int $y , int $color , string $fontfile , string $text )

- 参数说明：图像资源，字体尺寸，角度，第一个字符的基本点（大概是字符的左下角），Y 坐标（字体基线的位置），颜色 ，字体文件，文本字符串（UTF-8 编码）

```
header('Content-type:image/png');
$res = imagecreatetruecolor(500, 500);
$red = imagecolorallocate($res, 255, 0, 0);
$green = imagecolorallocate($res, 0, 255, 0);
imagefill($res, 0, 0, $red);
$font = realpath('source.otf');
imagettftext($res, 50, 0, 0, 50, $green, $font, 'houdunren.com');
imagepng($res);
imagedestroy($res);
```

array imagettfbbox ( float $size , float $angle , string $fontfile , string $text )

- 文本范围的盒子大小，可以方便控制文本输出位置
- 返回一个含有 8 个单元的数组表示了文本外框的四个角：

| 变量 | 位置          |
| ---- | ------------- |
| 0    | 左下角 X 位置 |
| 1    | 左下角 Y 位置 |
| 2    | 右下角 X 位置 |
| 3    | 右下角 Y 位置 |
| 4    | 右上角 X 位置 |
| 5    | 右上角 Y 位置 |
| 6    | 左上角 X 位置 |
| 7    | 左上角 Y 位置 |

文字在画布右上角显示

```
$font = realpath('source.otf');
$text = 'houdunren.com';
$size = 16;
$box = imagettfbbox($size, 0, $font, 'houdunren.com');
$width  = $box[2] - $box[0];
$height = $box[0] - $box[7];
imagettftext($res, $size, 0, 500 - $width, $height, $green, $font, 'houdunren.com');
```

文字在画布中间显示

```
...
imagettftext($res, $size, 0, 250 - $width / 2, 250 - $height / 2, $green, $font, 'houdunren.com');
...
```

### 外部图像

打开图片文件

- imageCreateFromgif(filename/url)
- imageCreateFromjpeg(filename/url)
- imageCreateFrompng(filename/url)
- imageCreateFrombmp(filename/url)
- 返回一个资源类型

### 获得信息

imagesx(img_resource)

- 取得图像宽度

imagesy(img_resource)

- 取得图像高度

getimagesize(img_file)

- array getimagesize ( string $filename [, array &$imageinfo ] )

### 图像复制

拷贝图像的一部分	

- bool imagecopy ( resource $dst_im , resource $src_im , int $dst_x , int $dst_y , int $src_x , int $src_y , int $src_w , int $src_h )

拷贝并合并图像的一部分

- bool imagecopymerge ( resource $dst_im , resource $src_im , int $dst_x , int $dst_y , int $src_x , int $src_y , int $src_w , int $src_h , int $pct )

### 图片缩放

拷贝部分图像并调整大小

- bool imagecopyresampled ( resource $dst_image , resource $src_image , int $dst_x , int $dst_y , int $src_x , int $src_y , int $dst_w , int $dst_h , int $src_w , int $src_h )

## 验证码

使用方法

```
# 后台code.php
include 'Captcha.php';
$code = new Captcha(100, 30, 20);
$code->make();

# 前台
<img src="code.php" alt="">
```

验证码类

```
<?php
class Captcha
{
    protected $width;
    protected $height;
    protected $res;
    protected $len = 4;
    protected $font;
    protected $size;
    public function __construct(int $width = 100, int $height = 30, $size = 20)
    {
        $this->width = $width;
        $this->height = $height;
        $this->font = realpath('source.otf');
        $this->size = $size;
    }
    public function make()
    {
        $res = imagecreatetruecolor($this->width, $this->height);
        imagefill($this->res = $res, 0, 0, imagecolorallocate($res, 200, 200, 200));
        $this->text();
        $this->line();
        $this->pix();
        $this->render();
    }
    protected function text()
    {
        $text = 'abcdefghigk123456789';

        for ($i = 0; $i < $this->len; $i++) {
            $x = $this->width / $this->len * $i;
            $box = imagettfbbox($this->size, 0, $this->font, $text[$i]);
            imagettftext(
                $this->res,
                $this->size,
                mt_rand(-20, 20),
                $x,
                $this->height / 2 + ($box[0] - $box[7]) / 2,
                $this->textColor(),
                $this->font,
                strtoupper($text[$i])
            );
        }
    }
    protected function pix()
    {
        for ($i = 0; $i < 300; $i++) {
            imagesetpixel(
                $this->res,
                mt_rand(0, $this->width),
                mt_rand(0, $this->height),
                $this->color()
            );
        }
    }
    protected function line()
    {
        for ($i = 0; $i < 6; $i++) {
            imagesetthickness($this->res, mt_rand(1, 3));
            imageline(
                $this->res,
                mt_rand(0, $this->width),
                mt_rand(0, $this->height),
                mt_rand(0, $this->width),
                mt_rand(0, $this->height),
                $this->color()
            );
        }
    }
    protected function color()
    {
        return imagecolorallocate($this->res, mt_rand(100, 200), mt_rand(100, 200), mt_rand(100, 200));
    }
    protected function textColor()
    {
        return imagecolorallocate($this->res, mt_rand(50, 150), mt_rand(50, 150), mt_rand(50, 150));
    }
    protected function render()
    {
        header('Content-type:image/png');
        imagepng($this->res);
    }
}
```

## 水印类

调用方式

```
<?php
include "Water.php";
$water = new Water("logo.png");
$water->make('sun.png', '2.png', 5);
```

水印类源码

```
<?php
class Water
{
    //水印资源
    protected $water;
    //水印图片
    public function __construct(string $water)
    {
        $this->water = $water;
    }
    //入口方法
    public function make(string $image, string $filename = null, int $pos = 9)
    {
        $res = $this->resource($image);
        $water = $this->resource($this->water);
        $postion = $this->position($res, $water, $pos);
        imagecopy($res, $water,  $postion['x'], $postion['y'], 0, 0, imagesx($water), imagesy($water));
        $this->showAction($image)($res, $filename ?: $image);
    }
    //获取资源对象
    protected function resource($image)
    {
        $info = getimagesize($image);
        $function = [1 => 'imagecreatefromgif', 2 => 'imagecreatefromjpeg', 3 => 'imagecreatefrompng'];
        $call = $function[$info[2]];
        return $call($image);
    }
    //根据类型输出图片
    protected function showAction(string $image)
    {
        $info = getimagesize($image);
        $function = [1 => 'imagegif', 2 => 'imagejpeg', 3 => 'imagepng'];
        return $function[$info[2]];
    }
    //位置
    protected function position($des,  $res, int $pos)
    {
        $info = ['x' => 0, 'y' => 0];
        switch ($pos) {
            case 1:
                break;
            case 2:
                $info['x'] = (imagesx($des) - imagesx($res)) / 2;
                break;
            case 3:
                $info['x'] = (imagesx($des) - imagesx($res));
                break;
            case 4:
                $info['y'] = (imagesy($des) - imagesy($res)) / 2;
                break;
            case 5:
                $info['x'] = (imagesx($des) - imagesx($res)) / 2;
                $info['y'] = (imagesy($des) - imagesy($res)) / 2;
                break;
        }
        return $info;
    }
}
```

## 缩略图

调用方式

```
include 'Resize.php';
$image =  new Resize;

$image->make('sun.png', '1.jpeg', 200, 200, 3);
```

缩略图类源码

```
<?php
class Resize
{
    public function make(string $file, string $to = null, int $width = 200, int $height = 200, int $type = 3)
    {
        $image = $this->resource($file);
        $info = $this->size($width, $height, imagesx($image), imagesy($image), $type);
        $res = imagecreatetruecolor($info[0], $info[1]);
        imagecopyresampled($res, $image, 0, 0, 0, 0, $info[0], $info[1], $info[2], $info[3]);
        header('Content-type:image/jpeg');
        imagejpeg($res);
    }
    protected function size($rw, $rh, $iw, $ih, int $type)
    {
        switch ($type) {
            case 1:
                //固定宽度，高度自动
                $rh = $rw / $iw * $ih;
                break;
            case 2:
                //高度固定，宽度自动 
                $rw = $rh / $ih * $iw;
                break;
            case 3:
                //固定宽度，高度裁切
                $ih = $iw / $rw * $rh;
                break;
            default:
                if (($iw / $rw) > ($ih / $rh)) {
                    $iw = $ih / $rh * $rh;
                } else {
                    $ih = $iw / $rw * $rw;
                }
        }

        return [$rw, $rh, $iw, $ih];
    }
    protected function resource(string $image)
    {
        if (!file_exists($image) || getimagesize($image) === false) {
            throw new Exception("file dont exists or it's not an image file");
        }
        $functions = [1 => 'imagecreatefromgif', 2 => 'imagecreatefromjpeg', 3 => 'imagecreatefrompng'];
        $info = getimagesize($image);
        $call = $functions[$info[2]];
        return $call($image);
    }
}

```

# 面向对象

> 创作不易，转载请注明出处： 后盾人 @ houdurnen.com

## 历史

早期编程由于受电脑硬件限制，程序都是追求效率，而忽略可理解性，扩充性，随着硬件技术的发展，编程越来越重视多人开发，程序员越来越重视程序的可靠性，可扩展性，可维护性，所以刺激了程序语言的发展

面向过程

- 程序员设计好程序代码流程图，辅助程序设计。优点：用什么功能就编写什么函数    缺点：数据管理上比较混乱 ，主要集中在函数成面上，面向对象把属性和方法进行封装，更好的可重用性和可扩展性

面向对象

- 万物皆对象，将构成问题的事务分解到各个对象上，建立对象的目的不是为了完成一个工作，而是为了描述某个事务在解决问题中的行为，更符合人的思维习惯，代码重用性高，可扩展性好

> 面向对象和面向过程的核心区别是如何分配职责。

## 类和对象

面向对象是由一系统具有属性和方法的对象构成，对象之间相互交互 ，从而实现业务需求。

属性

- 在类中定义的变量，即为成员属性，用于描述对象静态特性的数据。如人的姓名，性别，首字母小写

方法

- 函数定义在类中即为成员方法，用于描述对象动态特性的操作行为，方法名不区分大小写，不可重名，首字母小写

对象生命周期

- 创建后，生命周期开始，当程序结束后或程序员清除对象后即销毁，PHP会自动销毁对象

类是一种抽象的概念，是具有相同语义定义对象的集合（具有相同属性和方法的集体），使用具体的类是不可行的，只能实例化。拿汽车举例，汽车的设计图纸就是类，汽车是对象。设计中重点是类的创建

类名书写规范

- 类名首字母大写
- 一个类定义在一个文件中

### $this

对象中使用 `$this` 指针可以访问属性或方法。

```
class Code
{
    protected $len = 5;
    public function make()
    {
        return $this->len . $this->show();
    }
    public function show()
    {
        return ' : is show';
    }
}
echo (new Code)->make();
```

## 继承

通过使用 `extends` 可以继承父类的属性与方法，在PHP中继承是单一的。

```
class Notify
{
    public function message()
    {
        return 'notify message';
    }
}
class User extends Notify
{ }
echo (new User)->message();
```

### 父类调用 

子类可以使用 `parent` 关键字调用父类方法

```
...
public function message()
{
	return parent::message();
}
...
```

### 方法重写

子类可以重写父类的方法，除非父类的方法没有使用 `final` 修饰。

```
class Notify
{
    public function message()
    {
        return 'notify message';
    }
}
class User extends Notify
{
    public function message()
    {
        return 'user notify';
    }
}
echo (new User)->message();
```

### 禁止重写

使用final声明的方法，将禁止在子类中重写父类方法。

```
public final function message()
{
	return 'notify message';
}
```

## 封装

public 公有

- 在类的内部与外部或子类都可以访问，是最开放的权限

private 私有

- 定义类的属性和方法，在类的内部可以访问，在类的外部或子类都不可以访问

protected 受保护

- 定义类的属性和方法，在类的内部或子类可以访问，类的外部不可以访问

模块设计

- 强内聚（功能尽量在类的内部完成），弱耦合（开放尽量少的方法给外部调用）。例：公司销售接项目，具体工作交给公司内部程序员，设计人员，服务器管理人员协同完成

## trait

使用`trait` 机制可以变相的使用多重继承。

```
class Alipay
{
    use Pay;
}
class WePay
{
    use Pay;
}

trait Pay
{
    public function sn()
    {
        return 'ABCDEF';
    }
}
echo (new WePay)->sn();
```

如果本类与 trait 中存在同名的属性和方法时，将使用本类中的属性与方法。

```
...
class WePay
{
    use Pay;
    public function sn()
    {
        return __METHOD__;
    }
}

trait Pay
{
    public function sn()
    {
        return 'ABCDEF';
    }
}
...
```

### 多个trait

可以使用多个 `trait` 用逗号连接

```
...
use Pay,Site;
...
```

### 解决冲突

```
class WePay
{
    use Pay, Email {
    Pay::notify insteadof Email;
    Email::notify as EmailNotify;
}
trait Pay
{
    public function notify()
    {
        return __METHOD__;
    }
}
trait Email
{
    public function notify()
    { 
    	return __METHOD__;
    }
}
echo (new WePay)->notify();

```

`Pay::notify insteadof Email` 表示使用 `Pay::notify` 方法替代 `Email::notify` 方法。

`Email::notify as EmailNotify` 将`Email:notify` 别名为 `EmailNotify`

### 访问控制

可以为继承的 trait 方法重新定义访问控制

```
class WePay
{
    use Pay, Email {
    Pay::notify insteadof Email;
    Email::notify as protected EmailNotify;
    ...
}
```

### 多重trait

可以通过多个`trait` 组合来使用。

```
trait Notify
{
    public function response()
    {
        return 'notify response';
    }
}
trait Pay
{
    use Notify;
}

class User
{
    use Pay;
}
echo (new User)->response();
```

### 抽象方法

```
trait Notify
{
    public function response()
    {
        return 'notify response' . $this->sn();
    }
    abstract protected function sn();
}
trait Pay
{
    use Notify;
}

class User
{
    use Pay;
    protected function sn()
    {
        return 'SN999';
    }
}
echo (new User)->response();
```

### 静态方法

在 `trait` 中可以使用静态方法、抽象方法、静态属性。

```
...
trait Pay
{
    public function sn()
    {
        return 'ABCDEF';
    }
    public static function notify()
    {
        return __METHOD__;
    }
}
class WePay
{
    use Pay;
    ...
}
echo WePay::notify();
```

## static

static：

- 需要一个数据对象只服务于类，即类内部可用，对外不可用时。建对象是极其耗费资源的,因此当一个方法具有比较强的公用性的时候,没有必要为了调用这个方法而重新再生成该类的实例。定义的方法或变量在程序第一次加载时即驻留内存，程序结束释放。

static变量：

- 通过static声明的成员变量为静态变量或叫类变量，是该类的公共变量，在第一次使用时即生成，对于该类的所有对象只有一份，是属于类的，不是属于对象的。static变量是属于类而不属于对象，可以在任何地方通地类来访问，是类的全局变量，类创建时即存入内存。对多个对象来说，静态数据成员只存储一处，可以节省内存。只要对静态数据成员的值更新一次，保证所有对象存取更新后的相同的值。

static方法：

- 用static声明的方法为静态方法或叫类方法，执行该方法时不会将对象引用传给函数，所以我们不能访问非静态成员，只能访问静态方法或静态变量。只能使用关于类的方式如self   static  parent等。使用时不用生成对象即可执行

## 类常量

使用 `const` 来定义类常量，常量使用 `self::`来调用。

```
class Model implements ArrayAccess, Iterator
{
    use ArrayIterator, Relation, Validate, Auto, Filter;
    //----------自动验证----------
    //有字段时验证
    const EXIST_VALIDATE = 1;
    //值不为空时验证
    const NOT_EMPTY_VALIDATE = 2;
    ...
}
```

## $this self:: parent::

$this

- 是当前对象的引用， 一般出现在方法里,用于获取类的成员属性，或执行类的成员方法

self::

- 对本类的引用 ，用于获取当前类的表态成员属性或静态成员方法self::run()

parent::

- 对父类的引用,调用父类的方法或属性。

## 魔术方法

### 构造方法&析构方法

构造方法__construct()

- 在创建对象时自动执行，没有返回值，用于执行类的一些初始化工作，如对象属性的初始化工作，构造方法为__construct()。
- 可以在构造方法中传递参数，用于定义属性，在父类和子类都定义构造方法时，执行子类的构造方法

析构方法__destruct()：

- 当所有对象的引用被销毁时执行。

### \_\_get 与\_\_set

读取不可访问或不存在的属性时，\__get() 会被调用，同理获取不可访问或不存的的属性时会执行 \__set() 方法。

```
<?php
abstract class Query
{
    abstract protected function record(array $data);
    public function select()
    {
        return $this->record(['name' => '后盾人', 'age' => 33]);
    }
}
class Model extends Query
{
    protected $field = [
        'name'
    ];
		public function all(){
			$this->select();
			return $this->field;
		}
    protected function record(array $data)
    {
        $this->field = $data;
    }
    public function __get($name)
    {
        return $this->field[$name] ?? null;
    }
    public function __set($name, $value)
    {
        $this->field[$name] = $value;
    }
}

$user = new Model;
$user->all();
echo $user->name;
$user->name = '向军大叔';
echo $user->name;ry
```

\### __isset() 与 \__unset()

当使用 isset()函数或者empty()函数 判断属性是否存在或者是否为空的时候会自动触发。

当使用 unset() 函数判断属性时，如果存在\__unset() 方法将会执行。

```
...
public function __unset($name)
{
	if (!isset($this->field[$name]) || in_array($name, $this->deny)) {
		throw new Exception('禁止操作');
	}
}
public function __isset($name)
{
	return isset($this->field[$name]);
}
...
```



## 抽象类&抽象方法

具有抽象方法的类为抽象类，抽象方法即为没有内容的空方法，要求子类进行完善内容，抽象类不能实例化，只能继承，通过extends来实现，抽象类中也可以定义普通方法

父类方法执行方式不确定，但子类还都有这个方法

- 例1：如交通工具类：定义抽象方法控制交通工具运行方式，这样每个交通工具如飞机，汽车都要重写父类方法。如果在父类工具类定义该方法（比如在地上走）没有任何意义，因为每个交通工具都要重写（飞机要重写方法，船要重写方法），所以针对你类方法的不确定性，我们需要抽象方法，实现多态。

例2：定义动物类，每个动物都有叫声方法，但是表面不同，所以要定义为抽象类，让每种动物类去实现功能。

- 当父类为抽象类时，子类必须重写父类的抽象方法

- 抽象类里不一定非要写抽象方法，但有抽象方法的类必须定义为抽象类

- 抽象类必须继承使用

- 抽象方法不能有主体即{}

- ```
  <?php
  
  abstract class AbstractClass
  {
     // 强制要求子类定义这些方法
  	abstract protected function getValue();
  
  	abstract protected function prefixValue($prefix);
  
     // 普通方法（非抽象方法）
      public function printOut() {
          print $this->getValue();
  
      }
  }
  
  ```

## 接口

接口是一组成员声明方法的集合，包含空的成员方法和常量，空的方法要求继承类去具体实现。成员方法为public，属性为常量。

- - 例如：现实中的电脑USB或PCI插槽，插线板等都有接口例子

继承是一级一级层次式，如果某一层出现问题，整个继承就会出现意外。而接口只影响实现接口的类，接口可以在破坏原来的继承基础上对类扩展。接口可以实现多继承。 

- 例：电脑USB接口，规定各个厂商必须构造合适的接口方法，比如手机，数码相机，网银U盾。要让各个厂商写自己的方法如U盾插到USB上他会自动安装网银驱盾，弹出网页，手机装上后可以打开手机里的内容，同时可以充电

抽象类及普通类都可以实现接口，通过关键字implements

接口与抽象类的区别：

- 1 接口只能用implements实现   抽象类用extends继承实现

  2 接口没有数据成员，可以定义常量，抽象类可以有

  3 接口没有构造函数，抽象类可以定义构造函数

  4 接口方法都是public 抽象类方法可以用protected private public来修饰

  5 一个类可以实现多个接口，但只能继承一个抽象类

  6 接口中不可以有成员方法，抽象类可以有成员方法

```
interface DbInterface {
    public function connectDb(); //获得连接   参数为表名
    public function close(); //关闭数据库
    public function exe($sql); //发送没有返回值的sql
    public function query($sql); //有返回值的sql
｝
class Db implements DbInterface
{
	public function exe($sql){
	}
	public function query($sql{
	}
｝

```

# 命名空间

> 创作不易，转载请注明出处： 后盾人 @ houdurnen.com

## 使用场景

大部分情况都需要多个文件才可以业务，这就会出现类名冲突的情况发生，命名空间可以解决这类问题人。

在操作系统中目录用来将文件管理，它就扮演了命名空间的角色。例如文件*foo.txt* 可以同时在目录*/home/greg* 和 */home/other* 中存在，但在同一个目录中不能存在两个 *foo.txt* 文件。另外，在目录 */home/greg* 外访问 *foo.txt* 文件时，我们必须将目录名以及目录分隔符放在文件名之前得到*/home/greg/foo.txt*。这 个原理应用到程序设计领域就是命名空间的概念。

## 基本使用

默认情况下常量、类和函数名都放在全局空间下。命名空间通过namespace 来声明。

namespace 必须定义在文件头部，并在`declare(strict_types=1)` 语句下面。

**helper.php**

```
function sum()
{
    return 'helper sum';
}
```

**test.php**

```
namespace Houdunren;

include 'helper.php';
function sum()
{
    return 'houdunren sum';
}
# 使用当前命名空间中的sum
echo sum();
# 使用 helper.php 中的sum
echo \sum();
```

- 不指定命名空间时将使用当前命名空间
- 如果命名空间中的函数或常量未定义，将会使用全局命名空间

## 子命名空间

PHP 命名空间也允许指定层次化的命名空间的名称，如 `App\Controller` 形式，一般情况下我们将层次与目录结构匹配。

```
namespace App\Controller;

class Bootstrap
{
    public function make()
    {
        return __METHOD__;
    }
}
```

## 引入方式

### **非限定名称**

调用类时没有指定命名空间时，将使用当前命名空间。

下面在使用`User` 时没有指定命名空间将使用当前命名空间。

```
namespace App;

class User
{
    public function make()
    {
        return __METHOD__;
    }
}

$user = new User;
echo $user->make();
```

### 限定名称

限定名称类似于文件系统中的相对路径 。

**Order.php**

```
namespace App\Controller;

class Order
{
    public static function make()
    {
        return __METHOD__;
    }
}
```

**Test.php**

```
namespace App;

include 'Order.php';
class User
{
    public static function make()
    {
        return __METHOD__;
    }
}
echo Controller\Order::make();
```

使用限定名称调用 `Order` 类，系统会使用当前命名空间加上 `Controller` 做为`Order` 类的命名空间。

### 完全限定名称

类似于文件系统中的绝对路径，以下面的代码为例，调用Order类时可以使用以下的完全限定方式。

```
echo \App\Controller\Order::make();
```

## 常量

常量**__NAMESPACE__**的值是包含当前命名空间名称的字符串。

```
<?php
namespace App;

function factory($class)
{
    return __NAMESPACE__ . '\\' . $class;
}
class User
{
    public static function make()
    {
        return __METHOD__;
    }
}
class Order
{
    public static function make()
    {
        return __METHOD__;
    }
}
echo factory('Order')::make();

```

使用 `namespace` 关键字

```
<?php
namespace App;
class Order
{
    public static function make()
    {
        return __METHOD__;
    }
}
echo namespace\Order::make();
```

## 别名引入

通过操作符 use 来为类或命名空间使用别名。

### 基本使用

本实例使用的示例目录结构如下：

```
App
--Controller
	-- Comment.php
	-- User.php
boot.php
```

**boot.php**

```
namespace Houdunren;

use App\Controller\User;
include 'App/Controller/User.php';
echo User::make();
```

如果使用  `use App\Controller`，在引入 `User` 类时方法如下

```
Controller\User::make()
```

### 别名

在引入多个同名类时会有冲突情况发生，可以通过起别名的方式处理。

```
namespace Houdunren;

use App\Controller\User as Member;

include 'App/Controller/User.php';

echo Member::make();
```

### 多个引入

可以使用多行 `use` 或用逗号分隔多个类（空间）形式处理多个导入的情况。

```
namespace Houdunren;

use App\Controller\User as Member;
use App\Controller\Comment;

include 'App/Controller/User.php';
include 'App/Controller/Comment.php';

echo Member::make();

```

使用逗号分隔

```
<?php
...
use App\Controller\User as Member, App\Controller\Comment;
...
```

## 自动加载

### 注册加载

以往的\__autoload 自动加载函数已经在 php7.2 废弃使用，所以使用 `spl_autoload_register` 函数完成自动加载处理。

```
spl_autoload_register(function (string $class) {
    $file = str_replace('\\', '/', $class) . '.php';
    if (!is_file($file)) {
        throw new \Exception("file don't exists");
    }
    require $file;
});
```

使用类方法实现

```
class Bootstrap
{
    public function autoload($class)
    {
        $file = str_replace('\\', '/', $class) . '.php';
        if (!is_file($file)) {
            throw new \Exception("file don't exists");
        }
        require $file;
    }
}
spl_autoload_register([new Bootstrap, 'autoload']);

```



### composer

使用composer 是`后盾人` 建议使用的方式，`composer`相关视频已经在 `houdunren.com`上更新，下面简略介绍使用方法。

**项目初始**

```
$ composer init

```

直行上面命令并一直回车下去

**修改配置文件**

个性 `composer.json` 配置文件，其中 `autoload`配置项是自动加载设置。

- files 是自动加载文件列表，适合于加载函数
- psr-4 自动加载命名空间与目录对应关系

```
{
    "name": "hd/php",
    "authors": [
        {
            "name": "houdunren.com",
            "email": "2300071698@qq.com"
        }
    ],
    "autoload": {
        "files": [
            "App/helper.php"
        ],
        "psr-4": {
            "App\\": "App"
        }
    },
    "require": {}
}

```

### 安装与更新

修改配置文件后执行 `composer install` 生成vendor，如果修改过配置文件需要执行 `composer update`。

### 配置

在项目中使用以下代码即可完成自动加载。

```
include 'vendor/autoload.php';

```

# 错误处理 

> 创作不易，转载请注明出处： 后盾人 @ houdunren.com

PHP语言开发简单之处也体现在可以提供丰富的错误信息。

## 错误显示

修改 `php.ini` 配置文件， `display_errors = On` 即开启错误显示。

## 错误类型

### 语法错误

违背了程序语言的规则错误，称之为语法错误。比如不以分号结束的语句，或函数写错时都会出现语法错误。语法错误PHP会在运行前检测出来。

下面代码没有以分号结束，将报语法错误

```
<?php
echo 'houdunren'
```

错误内容如下

```
( ! ) Parse error: syntax error, unexpected end of file, expecting ',' or ';' in C:\wamp64\www\php\index.php on line 3
```

### 运行错误

经过语法错误检测后，将开始运行PHP代码，在此发生的错误为运行时错误。

以下代码因为加载不存在文件，所以会发生运行时错误。

```
<?php
require 'houdunren';
```

错误内容如下

```
( ! ) Warning: require(houdunren): failed to open stream: No such file or directory in C:\wamp64\www\php\index.php on line 2
```

常见运行错误如下：

- 加载不存在文件
- 连接数据库失败
- 远程请求失败
- 函数或类不存在

如果有用户数据参与的脚本，需要对数据进行校验。

### 逻辑错误

逻辑错误是指软件开发工程师在业务逻辑开发中造成错误。

下面展示一个工程师分析不到位，造成的逻辑错误示例。

```
for ($i = 0; $i < 5; $i--) {
    echo $i;
}
```

## 错误报告 

### 常见错误类型

| 值   | 常量            | 描述                                                         |
| :--- | :-------------- | :----------------------------------------------------------- |
| 1    | E_ERROR         | 致命的运行时错误。这类错误一般是不可恢复的情况，例如内存分配导致的问题。后果是导致脚本终止不再继续运行 |
| 2    | E_WARNING       | 运行时警告 (非致命错误)。仅给出提示信息，但是脚本不会终止运行。 |
| 8    | E_NOTICE        | 运行时通知。表示脚本遇到可能会表现为错误的情况。             |
| 64   | E_COMPILE_ERROR | 致命编译时错误。类似 E_ERROR                                 |
| 2048 | E_STRICT        | 启用 PHP 对代码的修改建议，以确保代码具有最佳的互操作性和向前兼容性。 |
| 8192 | E_DEPRECATED    | 运行时通知。启用后将会对在未来版本中可能无法正常工作的代码给出警告。 |
| 8191 | E_ALL           | 所有错误和警告，除级别 E_STRICT 以外。                       |

关闭警告与致命错误

```
error_reporting(~E_WARNING & ~E_COMPILE_ERROR);
require('a');
```

显示除通知外的所有错误

```
error_reporting(E_ALL & ~E_NOTICE);
echo $houdunren;
```

关闭错误显示

```
error_reporting(0);
```

## 处理引擎

通过自定义错误与日志处理引擎，让错误处理个性化。同时有些错误是在用户访问发生的，通过日志可以更全面检测网站运行状态。

```
<?php
namespace Core;
class Error
{
	# debug 开启状态
    protected $debug;
    public function __construct($debug = true)
    {
        $this->debug = $debug;
    }
    public function bootstrap()
    {
        error_reporting(0);
        # 自定义错误处理
        set_error_handler([$this, 'error'], E_ALL | E_STRICT);
    }
    public function error($errno, $error, $file, $line)
    {
        $msg = $error . "($errno)" . $file . " ($line).";
        switch ($errno) {
            case E_USER_ERROR:
            case E_USER_NOTICE:
                break;
            case E_NOTICE:
            	# 开启debug时显示提示消息
                if ($this->debug)
                    echo $msg;
                break;
            default:
                if ($this->debug) {
                    include 'debug.php';
                } else {
                    $file =  'logs/' . date('Y_m_d') . '.log';
                    # 记录错误日志到文件
                    error_log(date("[ c ]") . $msg . PHP_EOL, 3, $file, null);
                }
                die;
        }
    }
}
(new Error(false))->bootstrap();
include('houdunren.com');

```

**错误显示页面**

debug.php用于显示开启debug时的错误显示页面。

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <?php echo 'File:' . $file . '  Line:' . $line; ?>
            </div>
            <div class="card-body p-0">
                <ul class="list-group list-group-flush">
                    <?php foreach (debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS) as $id => $f) : ?>
                        <li class="list-group-item">
                            <?php echo "#$id " . $f['file'] . "({$f['line']})<br/>"; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
```

# 异常处理

> 创作不易，转载请注明出处： 后盾人 @ houdurnen.com

## 异常说明

异常是推荐的错误处理方式，传统的错误处理方式要判断并一层一层返回到调用点，如下所示：

```
<?php
class Code
{
    protected $len;
    public function make(int $len)
    {
        $this->len = $len;
        if ($this->line() === false) {
            return false;
        }
    }
    public function line()
    {
        if ($this->len > 5) {
            return false;
        }
    }
}
$code = new Code;
if ($code->make(10) === false) {
    echo '验证码创建失败';
}
```

通过上面代码我们发布处理错误时及其不方便，需要多个判断语句。下面是改用异常的处理方式。

```
<?php
class Code
{
    protected $len;
    public function make(int $len)
    {
        $this->len = $len;
        $this->line();
    }
    public function line()
    {
        if ($this->len > 5) {
            throw new Exception('长度不能超过五位');
        }
    }
}
try {
    $code = new Code;
    $code->make(10);
} catch (Exception $e) {
    echo $e->getMessage();
}
```

## 基本使用

### try/catch

PHP需要手动抛出异常，这与其他语言不同，异常使用try...cache触发。

```
try{
	...
}catch(){
	...
}
```

在 `try` 代码块中对出现的错误可以抛出异常，下面是手动抛出异常的方法。

```
throw new Exception($message,$code)
```

`catch` 用于接收异常，可以设置多个`catch` 代码块，参数为 `Exception` 类或继承于 `Exception` 的类。

```
<?php
class ValidateException extends Exception
{ }
try {
    throw new ValidateException('is exception', 403);
} catch (ValidateException $e) {
    echo 'httpException' . $e->getMessage() . ';code:' . $e->getCode();
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo '无论是否抛出异常都将执行' . ';code:' . $e->getCode();;
}
```

### finally

`finally`需要放在 `catch` 后，`finally`无论是否抛出异常都会执行。

```
...
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo '无论是否抛出异常都将执行';
}
...
```

## 异常类

### 基类方法

PHP为异常处理提供了基础类 `Exception`，Exception` 类可用方法如下：

| 方法       | 说明                   | 重写     |
| ---------- | ---------------------- | -------- |
| getFile    | 产生异常错误的文件     | NO,final |
| getCode    | 错误码                 | NO,final |
| getLine    | 错误行号               | NO,final |
| getMessage | 错误消息               | NO,final |
| __toString | 对象转字符串后输出内容 | YES      |

```
<?php
class ValidateException extends Exception
{
	//对象转字符串时执行的魔术方法
    public function __toString()
    {
        return $this->getFile();
    }
}
try {
    throw new ValidateException('is exception', 403);
} catch (ValidateException $e) {
    echo "文件:" . $e->getFile() . "<hr/>";
    echo "消息:" . $e->getMessage() . "<hr/>";
    echo "错误码:" . $e->getCode() . "<hr/>";
    echo "错误行:" . $e->getLine() . "<hr/>";
    echo $e . "<hr/>";
}
```

### 异常实例

实际开发中需要根据不同业务创建处理错误的异常类，推荐使用异常来处理错误而不是PHP的错误处理机制。

因为代码量比较大，大家请查看视频教程来学习。

## 自定义异常

下面是通过实例讲解自定义异常的使用方法。

### 目录结构

```
app
-- Exceptions
	-- ValidateException.php
	-- ViewException.php
-- Servers
	-- Validate.php
	-- View.php
-- vendor
-- view
	-- error.blade.php
	-- index.blade.php
	-- success.blade.php
bootstrap.php
composer.json
controller.php
index.php

```

### 文件内容

#### app\Exceptions\ValidateException.php

```
<?php
namespace App\Exceptions;

class ValidateException extends \Exception
{
    public function render()
    {
        $_SESSION['VALIDATE_ERROR'] = '表单参数错误';
        header('location:index.php');
    }
}

```

#### app\Exceptions\ViewException.php

```
<?php
namespace App\Exceptions;

use App\Servers\View;

class ViewException extends \Exception
{
    public function render()
    {
        View::make('error', ['error' => $this->getMessage()]);
    }
}
```

#### app\Servers\Validate.php

```
<?php
namespace App\Servers;

use App\Exceptions\ValidateException;

class Validate
{
    public static function make()
    {
        $_SESSION['VALIDATE_ERROR'] = '';
        if (empty($_POST['title'])) {
            throw new ValidateException('表单错误');
        }
    }
}
```

#### app\Servers\View.php

```
<?php
namespace App\Servers;

use App\Exceptions\ViewException;

class View
{
    public static function make(string $tpl, array $vars = [])
    {
        $file = 'view/' . $tpl . '.blade.php';
        if (!is_file($file)) {
            throw new ViewException($file . '模板不存在');
        }
        include $file;
    }
}
```

#### app\view\error.blade.php

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $vars['error'];?></h1>
</body>
</html>
```

#### app\view\index.blade.php

```
<?php if(isset($_SESSION['VALIDATE_ERROR'])):?>
<?php echo $_SESSION['VALIDATE_ERROR'];?>
<?php endif;?>
    <form method="post" action="controller.php">
        <input type="text" name="title">
        <button>提交</button>
    </form>
```

#### app\view\error.blade.php

```
<h1>操作成功</h1>
```

#### app\bootstrap.php

```
<?php
session_start();
include 'vendor/autoload.php';
class Boot
{
    public function init()
    {
        set_exception_handler([$this, 'exception']);
    }
    public function exception($e)
    {
        if (method_exists($e, 'render')) {
            $e->render();
        }
    }
}
(new Boot)->init();
```

#### composer.json

```
{
    "name": "hd/app",
    "authors": [
        {
            "name": "houdunren.com",
            "email": "2300071698@qq.com"
        }
    ],
    "autoload": {
        "psr-4": {
            "App\\": "."
        }
    },
    "require": {}
}
```

#### controller.php

```
<?php
include 'bootstrap.php';
use App\Servers\Validate;
use App\Servers\View;

include 'vendor/autoload.php';
// try {
Validate::make();
View::make('success');
// } catch (ValidateException $e) {
//     $e->render();
// } catch (ViewException $e) {
//     $e->render();
// }

```

#### index.php

```
<?php
namespace App;

include 'bootstrap.php';
use App\Servers\View;

View::make('index');
```

# 数据库操作

PHP操作数据库的方式有多种如 `mysql` 、`mysqli`、`PDO`，目前主要使用的是PDO处理。

PDO 提供了一个数据访问抽象层，这意味着，不管使用哪种数据库，都可以用相同的函数（方法）来查询和获取数据。

## 连接数据库

下面是使用 `PDO` 连接数据库的操作，当连接失败时将抛出异常。

```
<?php
header('Content-type:text/html;charset=utf8');
$config = [
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'db' => 'houdunren',
    'charset'=>'utf8'
];
try {
    $dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8', $config['host'], $config['db'],$config['charset']);
    $pdo =  new PDO($dsn, $config['user'], $config['password']);
} catch (PDOException $e) {
    die($e->getMessage());
}

```

## 错误处理

| 错误类型               | 说明         |
| ---------------------- | ------------ |
| PDO::ERRMODE_SILENT    | 不显示错误   |
| PDO::ERRMODE_WARNING   | 显示警告错误 |
| PDO::ERRMODE_EXCEPTION | 抛出异常     |

可以在连接时设置错误类型

```
$pdo =  new PDO($dns, $config['user'], $config['password'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
```

也可以使用 `setAttribute` 方法设置错误处理方式

```
...
$pdo =  new PDO($dns, $config['user'], $config['password']);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
...
```

## 执行语句

使用 `exec` 方法可以发送执行语言

```
$pdo->exec("INSERT INTO news (title) VALUES('houdunren.com')");
echo "自增主键:".$pdo->lastInsertId();
```

执行删除操作

```
$affectedRows = $pdo->exec("DELETE FROM news WHERE id>3");
echo "受影响的条数：".$affectedRows;
```

## 发送查询

**设置返回列名**

| 属性                | 说明                     |
| ------------------- | ------------------------ |
| *PDO::CASE_LOWER*   | 强制列名小写             |
| *PDO::CASE_NATURAL* | 保留数据库驱动返回的列名 |
| *PDO::CASE_UPPER*   | 强制列名大写             |

```
$pdo->setAttribute(PDO::ATTR_CASE,PDO::CASE_LOWER);
```

**返回结果**

| 返回类型                            | 说明                   |
| ----------------------------------- | ---------------------- |
| $result->fetchAll(PDO::FETCH_ASSOC) | 获得关联数据           |
| $result->fetchAll(PDO::FETCH_NUM)   | 获得索引数据           |
| $result->fetchAll(PDO::FETCH_BOTH)  | 同时获取关联与索引数据 |
| $result->fetchAll(PDO::FETCH_OBJ)   | 获取对象类型数据       |

### fetchAll

一次获取所有结果

```
...
$query = $pdo->query("select * from news");
$rows = $query->fetchAll();
print_r($rows);
...
```

### fetch

每次获取结果中的一条数据

```
...
$pdo =  new PDO($dns, $config['user'], $config['password']);
$query = $pdo->query("select * from news");
while ($field = $query->fetch(PDO::FETCH_ASSOC)) {
	echo sprintf("编号:%s\t标题:%s<br/>", $field['id'], $field['title']);
}
...
```

## 预准备

预准备是将SQL的解析阶段与参数绑定分开执行，从而可以有效的防止SQL注入。

### SQL注入

下面来看一个SQL注入的例子

```
$query = $pdo->query("SELECT * FROM news WHERE id={$_GET['id']}");
```

如果GET参数如下将产生SQL注入

```
http://houdunren.test/1.php?id=1 or id>1
```

### 使用预准备

因为预准备是将解析与参数分开处理，可以有效的防止SQL注入。

```
$sql = "SELECT * FROM news WHERE id=:id";
$sth = $pdo->prepare($sql);
$sth->execute([':id' => $_GET['id']]);
$rows = $sth->fetchAll(PDO::FETCH_ASSOC);
print_r($rows);
```

**预准备添加记录**

```
$sql = "INSERT INTO news (title) VALUES(?)";
$sth = $pdo->prepare($sql);
$sth->execute(['houdunren.com']);
echo $pdo->lastInsertId();
```

**使用点位符操作**

```
$sth = $pdo->prepare("SELECT * FROM news WHERE id>?");
$sth->execute([3]);
print_r($sth->fetchAll());
```

## SQL生成器

### 处理类

下面构建一个SQL语句生成器，用于快速操作数据库。

```
<?php

namespace Database;

use PDO;
use Exception;

class DB
{
    protected $link = null;
    protected $options = ['table' => '', 'field' => '', 'limit' => '', 'order' => '', 'where' => ''];
    public function __construct($config)
    {
        $this->connect($config);
    }
    public function connect($config)
    {
        if (is_null($this->link)) {
            $dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8', $config['host'], $config['db']);
            $this->link =  new PDO($dsn, $config['user'], $config['password'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }
        return $this->link;
    }
    public function query($sql, array $vars = [])
    {
        $sth = $this->link->prepare($sql);
        $sth->execute($vars);
        return $sth->fetchAll();
    }
    public function execute($sql, array $vars = [])
    {
        $sth = $this->link->prepare($sql);
        return $sth->execute($vars);
    }
    public function field(...$fields)
    {
        $this->options['field'] = '`' . implode('`,`', $fields) . '`';
        return $this;
    }
    public function table(string $table)
    {
        $this->options['table'] = $table;
        return $this;
    }
    public function get()
    {
        $sql  = "SELECT {$this->options['field']} FROM {$this->options['table']} {$this->options['where']} {$this->options['order']} {$this->options['limit']}";
        return $this->link->query($sql);
    }
    public function orderBy(string $order)
    {
        $this->options['order'] = " ORDER BY " . $order;
        return $this;
    }
    public function limit(...$limit)
    {
        $this->options['limit'] = " LIMIT " . implode(',', $limit);
        return $this;
    }
    public function where(string $where)
    {
        $this->options['where'] = " WHERE " . $where;
        return $this;
    }
    public function insert(array $vars)
    {
        $sql = "INSERT INTO {$this->options['table']} (" . implode(',', array_keys($vars)) . ") VALUES(" . implode(',', array_fill(0, count($vars), '?')) . ")";
        return $this->execute($sql, array_values($vars));
    }
    public function delete()
    {
        $sql = "DELETE FROM {$this->options['table']} {$this->options['where']}";
        return $this->execute($sql);
    }
    public function update(array $vars)
    {
        if (empty($this->options['where']))
            throw new Exception('不能缺少条件');
        $sql  = "UPDATE {$this->options['table']} SET " . implode('=?,', array_keys($vars)) . "=? {$this->options['where']}";
        return $this->execute($sql, array_values($vars));
    }
}
```

### 预准备查询

```
...
$db->query("SELECT * FROM news WHERE id>=:id", ['id' => 1])
...
```

### 预准备执行

```
$db->execute("INSERT INTO news (title) VALUES(?)", ['hdcms.com'])
```

### 对象实例

```
use Database\DB;
include 'DB.php';
$config = [
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'db' => 'houdunren'
];

try {
	...
    $db = new DB($config);
    ...
}catch(Exception $e){
	die($e->getMessage());
}

```

### 查询操作

```
...
$rows = $db->table('news')->field('id', 'title')->limit(1, 3)->orderBy('id desc')->where("id>3")->get();
...

```

### 新增操作

```
...
$db->prepareExecute("INSERT INTO news (title) VALUES(?)", ['hdcms.com']);
...

```

### 更新操作

```
...
$db->table('news')->where('id=1')->update(['title' => "sina", 'author' => '后盾人', 'description' => '个性介绍']);
...

```

### 删除操作

```
...
$db->table('news')->where('id>2')->delete();
...

```





