<?php

namespace Core;

class Autoload{
    public static function start($classname){
        $filename=str_replace("\\","/",INDEX_DIR.$classname.".php");
        if(is_file($filename)){
            require $filename;
            return ;
        }
        die($filename."类文件不存在！");
    }
}

