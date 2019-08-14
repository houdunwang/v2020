<?php
function cache(string $name,array $data=null){
    $file = 'cache'.DIRECTORY_SEPARATOR.md5($name).'.php';
    if(is_null($data)){
        //取缓存数据
        $content = is_file($file)?file_get_contents($file):null;
        return unserialize($content)?:null;
    }else{
        return file_put_contents($file,serialize($data));
    }
}
$config  = include "database.php";
//cache('database',$config);
print_r(cache('database'));