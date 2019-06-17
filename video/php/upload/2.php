<?php
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
