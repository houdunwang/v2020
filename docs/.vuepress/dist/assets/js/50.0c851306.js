(window.webpackJsonp=window.webpackJsonp||[]).push([[50],{272:function(t,e,a){"use strict";a.r(e);var _=a(0),n=Object(_.a)({},function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("ContentSlotsDistributor",{attrs:{"slot-key":t.$parent.slotKey}},[a("h1",{attrs:{id:"文件上传"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#文件上传","aria-hidden":"true"}},[t._v("#")]),t._v(" 文件上传")]),t._v(" "),a("blockquote",[a("p",[t._v("创作不易，转载请注明出处： 后盾人 @ houdurnen.com")])]),t._v(" "),a("h2",{attrs:{id:"环境配置"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#环境配置","aria-hidden":"true"}},[t._v("#")]),t._v(" 环境配置")]),t._v(" "),a("p",[t._v("修改PHP.ini配置文件可以定制上传机制，通过 phpinfo() 函数可以查看到PHP.ini文件所在位置。")]),t._v(" "),a("table",[a("thead",[a("tr",[a("th",[t._v("配置")]),t._v(" "),a("th",[t._v("说明")])])]),t._v(" "),a("tbody",[a("tr",[a("td",[t._v("file_uploads")]),t._v(" "),a("td",[t._v("是否允许上传文件，On开启 Off禁止上传")])]),t._v(" "),a("tr",[a("td",[t._v("upload_tmp_dir")]),t._v(" "),a("td",[t._v("文件上传过程中临时保存的目录，默认保存位置为 /tmp")])]),t._v(" "),a("tr",[a("td",[t._v("upload_max_filesize")]),t._v(" "),a("td",[t._v("允许上传的最大文件大小，可以使用 K、M、G单位如 2M")])]),t._v(" "),a("tr",[a("td",[t._v("post_max_size")]),t._v(" "),a("td",[t._v("PHP将接受的最大POST数据大小，包括上传文件、表单数据。所以post_max_size要大于 upload_max_filesize")])]),t._v(" "),a("tr",[a("td",[t._v("max_file_uploads")]),t._v(" "),a("td",[t._v("单个请求时，允许上传的最大文件数量")])])])]),t._v(" "),a("p",[t._v("下面是一个简单上传表单示例")]),t._v(" "),a("div",{staticClass:"language- extra-class"},[a("pre",{pre:!0,attrs:{class:"language-text"}},[a("code",[t._v('<form action="2.php" method="post" enctype="multipart/form-data">\n\t<input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>\n\t<input type="file" name="up">\n\t<button>提交</button>\n</form>\n')])])]),a("p",[t._v("MAX_FILE_SIZE 表单用来设置允许的上传大小，单位为字节。如果发生错误，错误码为2。")]),t._v(" "),a("h2",{attrs:{id:"超全局数组"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#超全局数组","aria-hidden":"true"}},[t._v("#")]),t._v(" 超全局数组")]),t._v(" "),a("p",[t._v("上传的文件保存在 "),a("code",[t._v("$_FILES")]),t._v(" 超全局数组中，具体参数说明如下：")]),t._v(" "),a("table",[a("thead",[a("tr",[a("th",[t._v("选项")]),t._v(" "),a("th",[t._v("说明")])])]),t._v(" "),a("tbody",[a("tr",[a("td",[t._v("tmp_name")]),t._v(" "),a("td",[t._v("临时文件名")])]),t._v(" "),a("tr",[a("td",[t._v("name")]),t._v(" "),a("td",[t._v("上传文件原文件名")])]),t._v(" "),a("tr",[a("td",[t._v("type")]),t._v(" "),a("td",[t._v("文件MIME类型")])]),t._v(" "),a("tr",[a("td",[t._v("error")]),t._v(" "),a("td",[t._v("错误编号")])]),t._v(" "),a("tr",[a("td",[t._v("size")]),t._v(" "),a("td",[t._v("文件大小，单位字节")])])])]),t._v(" "),a("h2",{attrs:{id:"错误说明"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#错误说明","aria-hidden":"true"}},[t._v("#")]),t._v(" 错误说明")]),t._v(" "),a("p",[t._v("上传出错会在$_FILES['error'] 选项中体现，具体错误说明如下：")]),t._v(" "),a("table",[a("thead",[a("tr",[a("th",[t._v("错误")]),t._v(" "),a("th",[t._v("错误码")]),t._v(" "),a("th",[t._v("说明")])])]),t._v(" "),a("tbody",[a("tr",[a("td",[a("strong",[t._v("UPLOAD_ERR_OK")])]),t._v(" "),a("td",[t._v("0")]),t._v(" "),a("td",[t._v("没有错误发生")])]),t._v(" "),a("tr",[a("td",[a("strong",[t._v("UPLOAD_ERR_INI_SIZE")])]),t._v(" "),a("td",[t._v("1")]),t._v(" "),a("td",[t._v("上传的文件超过了 php.ini 中 "),a("a",{attrs:{href:"https://www.php.net/manual/zh/ini.core.php#ini.upload-max-filesize",target:"_blank",rel:"noopener noreferrer"}},[t._v("upload_max_filesize"),a("OutboundLink")],1),t._v(" 选项限制的值")])]),t._v(" "),a("tr",[a("td",[a("strong",[t._v("UPLOAD_ERR_FORM_SIZE")])]),t._v(" "),a("td",[t._v("2")]),t._v(" "),a("td",[t._v("上传文件的大小超过了 HTML 表单中 "),a("em",[t._v("MAX_FILE_SIZE")]),t._v(" 选项指定的值")])]),t._v(" "),a("tr",[a("td",[a("strong",[t._v("UPLOAD_ERR_PARTIAL")])]),t._v(" "),a("td",[t._v("3")]),t._v(" "),a("td",[t._v("文件只有部分被上传")])]),t._v(" "),a("tr",[a("td",[a("strong",[t._v("UPLOAD_ERR_NO_FILE")])]),t._v(" "),a("td",[t._v("4")]),t._v(" "),a("td",[t._v("没有文件被上传")])]),t._v(" "),a("tr",[a("td",[a("strong",[t._v("UPLOAD_ERR_NO_TMP_DIR")])]),t._v(" "),a("td",[t._v("6")]),t._v(" "),a("td",[t._v("找不到临时文件夹")])]),t._v(" "),a("tr",[a("td",[a("strong",[t._v("UPLOAD_ERR_CANT_WRITE")])]),t._v(" "),a("td",[t._v("7")]),t._v(" "),a("td",[t._v("文件写入失败")])])])]),t._v(" "),a("h2",{attrs:{id:"上传安全"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#上传安全","aria-hidden":"true"}},[t._v("#")]),t._v(" 上传安全")]),t._v(" "),a("p",[t._v("上传通过 "),a("code",[t._v("is_uploaded_file")]),t._v(" 与 "),a("code",[t._v("move_uploaded_file")]),t._v("  完成，函数会检测文件是否是合法的上传文件，以保证安全。")]),t._v(" "),a("div",{staticClass:"language- extra-class"},[a("pre",{pre:!0,attrs:{class:"language-text"}},[a("code",[t._v("if ($_FILES['up']['error'] > 0) {\n    die('上传失败，请检查文件类型或大小');\n}\n$uploadFile = 'uploads/' . time() . '.' . pathinfo($_FILES['up']['name'])['extension'];\nif (is_uploaded_file($_FILES['up']['tmp_name'])) {\n    if (move_uploaded_file($_FILES['up']['tmp_name'], $uploadFile)) {\n        die('上传成功:' . $uploadFile);\n    }\n}\ndie('上传错误');\n")])])]),a("h2",{attrs:{id:"处理类"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#处理类","aria-hidden":"true"}},[t._v("#")]),t._v(" 处理类")]),t._v(" "),a("p",[t._v("下面是支持单文件、多文件上传的处理类。")]),t._v(" "),a("p",[a("strong",[t._v("前台代码")])]),t._v(" "),a("div",{staticClass:"language- extra-class"},[a("pre",{pre:!0,attrs:{class:"language-text"}},[a("code",[t._v('<form action="controller.php" method="post" enctype="multipart/form-data">\n        <input type="file" name="up">\n        <input type="file" name="image[]">\n        <input type="file" name="image[]">\n        <button class="btn">提交</button>\n</form>\n')])])]),a("p",[a("strong",[t._v("后台代码")])]),t._v(" "),a("div",{staticClass:"language- extra-class"},[a("pre",{pre:!0,attrs:{class:"language-text"}},[a("code",[t._v("<?php\nnamespace Hd;\n\nclass Uploader\n{\n    protected $files = [];\n    public function make()\n    {\n        $saveFiles = [];\n        $this->format();\n        foreach ($this->files as $k => $file) {\n            if ($file['error'] == 0) {\n                if (is_uploaded_file($file['tmp_name'])) {\n                    $save = 'upload/' . $k . time() . '.' . pathinfo($file['name'])['extension'];\n                    if (move_uploaded_file($file['tmp_name'], $save)) {\n                        $saveFiles[] = $save;\n                    }\n                }\n            }\n        }\n        return $saveFiles;\n    }\n    /**\n     * 格式化文件\n     */\n    public function format(): array\n    {\n        $files = [];\n        foreach ($_FILES as  $field) {\n            if (is_array($field['name'])) {\n                foreach ($field['name'] as $id => $name) {\n                    $files[] = [\n                        'name' => $name,\n                        'type' => $field['type'][$id],\n                        'error' => $field['error'][$id],\n                        'size' => $field['size'][$id],\n                        'tmp_name' => $field['tmp_name'][$id],\n                    ];\n                }\n            } else {\n                $files[] = $field;\n            }\n        }\n        return $this->files = $files;\n    }\n}\n")])])]),a("h2",{attrs:{id:"文件下载"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#文件下载","aria-hidden":"true"}},[t._v("#")]),t._v(" 文件下载")]),t._v(" "),a("div",{staticClass:"language- extra-class"},[a("pre",{pre:!0,attrs:{class:"language-text"}},[a("code",[t._v('<?php\n$file="houdunwang.jpg";\n\n//指定下载文件类型为二进制\nheader("Content-type:application/octet-stream");\n\n//获取文件名\n$fileName = basename($file);\n\n//下载窗口显示文件名\nheader("Content-Disposition:attachment;filename={$fileName}");\n\n//文件尺寸单位\nheader("Accept-ranges:bytes");\n\n//文件大小\nheader("Accept-length:".filesize($file));\n\n//读取文件内容供下载\nreadfile($file);\n')])])])])},[],!1,null,null,null);e.default=n.exports}}]);