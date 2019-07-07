(window.webpackJsonp=window.webpackJsonp||[]).push([[46],{277:function(t,a,e){"use strict";e.r(a);var n=e(0),s=Object(n.a)({},function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("ContentSlotsDistributor",{attrs:{"slot-key":t.$parent.slotKey}},[e("h2",{attrs:{id:"函数编程"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#函数编程","aria-hidden":"true"}},[t._v("#")]),t._v(" 函数编程")]),t._v(" "),e("blockquote",[e("p",[t._v("创作不易，转载请注明出处： 后盾人 @ houdurnen.com")])]),t._v(" "),e("p",[t._v("函数（function）是一段完成指定任务的已命名代码，函数可以遵照给它的一组值或参数完成任务，并且可能返回一个值。使用函数可以节省编译时间，因为无论调用多少次，函数只需被编译一次。")]),t._v(" "),e("p",[e("strong",[t._v("函数的特性：")])]),t._v(" "),e("ol",[e("li",[t._v("控制程序设计的复杂性")]),t._v(" "),e("li",[t._v("提高软件的可靠性")]),t._v(" "),e("li",[t._v("提高软件的开发效率")]),t._v(" "),e("li",[t._v("提高软件的可维护性")]),t._v(" "),e("li",[t._v("提高程序的重用性")])]),t._v(" "),e("h3",{attrs:{id:"函数语法"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#函数语法","aria-hidden":"true"}},[t._v("#")]),t._v(" 函数语法")]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v("function  函数名称（参数1，参数2 …）{\n\t//程序业务内容\n\treturn 返回值； //如需函数有返回值时使用，否则函数返回值为null\n} \n")])])]),e("p",[e("strong",[t._v("函数名称")])]),t._v(" "),e("p",[t._v("它是函数在程序代码中的识别名称，函数名可以是以字母或下划线开头后跟零个或多个字母、下划线和数字的任何字符串。函数名不区分大小写。")]),t._v(" "),e("p",[t._v("命名函数时不可使用已声明的函数，或PHP内建的函数名称。")]),t._v(" "),e("p",[e("strong",[t._v("返回值")])]),t._v(" "),e("p",[t._v("当调用函数时需要它返回一些数值，那么就要函数体中用return语句实现。格式如下：")]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v("return '返回值'; //返回值也可以是一个表达式\n")])])]),e("p",[t._v("如果函数中没有使用return返回值时则函数返回值为null")]),t._v(" "),e("h3",{attrs:{id:"函数检测"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#函数检测","aria-hidden":"true"}},[t._v("#")]),t._v(" 函数检测")]),t._v(" "),e("p",[t._v("function_exists 用于检测函数是否定义")]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v("//检测hd这个函数是否定义：\nvar_dump(function_exists('hdcms'));\n")])])]),e("h3",{attrs:{id:"命名空间"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#命名空间","aria-hidden":"true"}},[t._v("#")]),t._v(" 命名空间")]),t._v(" "),e("p",[t._v("使用命名空间可以将函数声明在指定空间，防止函数重名引起冲突。")]),t._v(" "),e("p",[t._v("下面是定义 "),e("code",[t._v("User.php")]),t._v(" 与 "),e("code",[t._v("Article.php")]),t._v(" 两个文件内容如下：")]),t._v(" "),e("p",[t._v("User.php 文件内容")]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v("namespace User;\nfunction show()\n{\n    echo __NAMESPACE__.'\\\\'.__FUNCTION__.'<hr/>';\n}\n")])])]),e("p",[t._v("Article.php 文件内容")]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v("namespace User;\nfunction show()\n{\n    echo __NAMESPACE__.'\\\\'.__FUNCTION__.'<hr/>';\n}\n")])])]),e("p",[t._v("在 Test.php 使用")]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v("include 'User.php';\ninclude 'Article.php';\nUser\\show();\nArticle\\show();\n")])])]),e("p",[t._v("使用命名空间后就可以定义相同名称的函数了。")]),t._v(" "),e("h3",{attrs:{id:"参数传递"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#参数传递","aria-hidden":"true"}},[t._v("#")]),t._v(" 参数传递")]),t._v(" "),e("p",[e("strong",[t._v("按值传递参数")])]),t._v(" "),e("p",[t._v("父程序直接传递指定的值或是变量给函数使用。由于所传递的值或变量，与函数里的数值分别储存于不同的内存区块，所以当函数对所导入的数值作了任何变动时，并不会对父程序造成直接影响。")]),t._v(" "),e("p",[e("strong",[t._v("按址传递参数(用“&”符号实现)")])]),t._v(" "),e("p",[t._v("相对于按值传递模式，并不会将父程序中的指定数值或目标变量传递给函数，而是把该数值或变量的内存储存区块相对地址导入函数之中。因此当该数值在函数中有任何变动时，会连带对父程序造成影响。")]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v("function make(&$num)\n{\n    return ++$num;\n}\n$a = 1;\nmake($a);\necho $a;\n")])])]),e("p",[e("strong",[t._v("点语法")])]),t._v(" "),e("p",[t._v("当传递的参数数量确定时，可以使用…与变量名。函数的所有参数会成为变量的数组元素。")]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v("function sum(...$args)\n{\n    return array_sum($args);\n}\necho sum(1, 2, 3);\n")])])]),e("p",[e("strong",[t._v("参数默认值")])]),t._v(" "),e("p",[t._v("php支持函数的默认方式调用。如果在调用函数时没有指定参数的值，在函数中会使用参数的默认值。 默认参数必须列在所有没有默认值参数的后面。")]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v("function mobile($tel,$num=4,$fix = '*'){\n    return substr($tel,0,-1*$num).str_repeat($fix,$num);\n}\necho mobile('11122222121',3);\n")])])]),e("h3",{attrs:{id:"严格模式"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#严格模式","aria-hidden":"true"}},[t._v("#")]),t._v(" 严格模式")]),t._v(" "),e("p",[t._v("在文件头部定义"),e("code",[t._v("declare(strict_types=1)")]),t._v(" 为严格模式，这样会对函数参数类型进行严格约束。")]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v("// 必须定义在文件头\ndeclare(strict_types=1);\n//参数必须为int类型\nfunction handle(int ...$num)\n{\n    return array_sum($num);\n}\ntry {\n\t//参数类型错误抛出异常\n    echo handle(1, '2', 3);\n} catch (\\Throwable $th) {\n    echo $th->getMessage();\n}\n")])])]),e("h3",{attrs:{id:"返回值类型"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#返回值类型","aria-hidden":"true"}},[t._v("#")]),t._v(" 返回值类型")]),t._v(" "),e("p",[t._v("PHP7中我们可以设置函数允许的返回值类型。")]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v("function make():int\n{\n    return '向军大叔';\n}\n\ntry {\n    make();\n} catch (\\Throwable $th) {\n    echo $th->getMessage();\n}\n")])])]),e("p",[t._v("如果设置 "),e("code",[t._v("?int")]),t._v(" 表示返回类型为 "),e("code",[t._v("int")]),t._v("  或 "),e("code",[t._v("null")])]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v("function make():?int\n{\n    return null;\n}\n\ntry {\n    var_dump(make());\n} catch (\\Throwable $th) {\n    echo $th->getMessage();\n}\n")])])]),e("p",[t._v("系统会对返回值自动处理")]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v("function make():String\n{\n    return 100;\n}\n\ntry {\n    var_dump(make());\n} catch (\\Throwable $th) {\n    echo $th->getMessage();\n}\n")])])]),e("p",[t._v("如果不希望函数返回任何值时，设置返回值为 "),e("code",[t._v("void")])]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v("function make():void\n{\n    return '向军大叔';\n}\n\ntry {\n    var_dump(make());\n} catch (\\Throwable $th) {\n    echo $th->getMessage();\n}\n")])])]),e("h3",{attrs:{id:"变量范围"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#变量范围","aria-hidden":"true"}},[t._v("#")]),t._v(" 变量范围")]),t._v(" "),e("p",[e("strong",[t._v("变量能见度")])]),t._v(" "),e("p",[t._v("所谓变量的能见度，意指变量在程序中的可作用范围。当一个变量执行赋值动作后，会随着声明局部的差异，而有不同的作用范围。大致上来说变量会依据声明的局部分为下列两种：局部变量和全局变量。")]),t._v(" "),e("p",[e("strong",[t._v("局部变量")])]),t._v(" "),e("p",[t._v("在函数之中声明的变量就是局部变量，并且该变量只有在函数范围之中才能加以使用。如果其它程序局部需要调用使用该变量值时，必须透过「return」指令，来将其传回至主程序区块以作后续处理。")]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v('$hd=0;\nfunction p(){ \n\t$hd = 3;\t//定义局部变量\n\techo "在函数中显示局部变量\\$hd值: $hd </br>";\n}\np();\necho "在函数外显示变量\\$hd值: $hd <br>";\n')])])]),e("p",[e("strong",[t._v("全局变量")])]),t._v(" "),e("p",[t._v("在函数范围之外声明的变量为全局变量，在函数无法直接使用全局变量，函数要使用全局变量，必须要利用global引入或 $GLOBALS超全局数组引入。")]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v("$hd=“后盾网”; \nfunction p() { \t\n\tglobal $hd; //利用 global 引入全局变量\n\techo $hd;\n}\np();\n")])])]),e("p",[e("strong",[t._v("静态变量")])]),t._v(" "),e("p",[t._v("PHP支持声明函数变量为静态的(static)。一个静态变量在所有对该函数的调用之间共享，并且仅在脚本的执行期间函数第一次被调用时被初始化。要声明函数变量为静态的用关键字static。通常，静态变量的第一次使用时赋予一个初始值。")]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v("function sum(int ...$num):int\n{\n    static $count=0;\n    return $count+=array_sum($num);\n}\necho  sum(1, 2, 3);\necho '<hr/>';\necho  sum(1, 2, 3);\n")])])]),e("h3",{attrs:{id:"变量函数"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#变量函数","aria-hidden":"true"}},[t._v("#")]),t._v(" 变量函数")]),t._v(" "),e("p",[t._v("PHP 支持变量函数的概念。这意味着如果一个变量名后有圆括号，PHP 将寻找与变量的值同名的函数，并且将尝试执行它。除了别的事情以外，这个可以被用于实现回调函数，函数表等等。")]),t._v(" "),e("p",[t._v("变量函数不能用于语言结构，例如 echo()，print()，unset()，isset()，empty()，include()，require() 以及类似的语句。需要使用自己的外壳函数来将这些结构用作变量函数。")]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v("$file = 'hd.gif';\n$action =  strtolower(trim(strrchr($file, '.'), '.'));\nfunction jpg()\n{\n    return 'jpeg 类型';\n}\n\nfunction png()\n{\n    return 'png 类型';\n}\nif (!function_exists($action)) {\n    echo '文件类型错误';\n} else {\n    echo $action();\n}\n")])])]),e("h3",{attrs:{id:"递归调用"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#递归调用","aria-hidden":"true"}},[t._v("#")]),t._v(" 递归调用")]),t._v(" "),e("p",[t._v("所谓的函数递归调用，就是函数可以在其声明的执行叙述之中调用执行自己。")]),t._v(" "),e("p",[t._v("通常在此类型的函数之中会附加一个条件判断叙述，以判断是否需要执行递归调用，并且在特定条件下终止函数的递归调用动作，把目前流程的主控权交回上一层函数执行。因此当某个执行递归调用的函数，没有附加条件判断叙述时可能会造成无限循环的错误情形。")]),t._v(" "),e("p",[t._v("函数递归调用最大的好处在于可以精简程序中繁杂重复调用程序，并且能以这种特性来执行一些较为复杂的运算动作。")]),t._v(" "),e("div",{staticClass:"language- extra-class"},[e("pre",{pre:!0,attrs:{class:"language-text"}},[e("code",[t._v('function recursive($n)\n{\n    if ($n==1) {\n        return $n;\n    }\n    return $n*recursive($n-1);\n}\necho "当 N 值为 5 时,阶乘为: ".recursive(5);\n')])])]),e("p",[e("img",{attrs:{src:"assets/%E9%80%92%E5%BD%92.gif",alt:"递归"}})])])},[],!1,null,null,null);a.default=s.exports}}]);