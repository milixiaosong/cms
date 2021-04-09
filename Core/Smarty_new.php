<?php

namespace Core;

use Smarty;

class Smarty_new{
    /**
     * 配置smarty的模板路径、转换后的文件存储路径
    */
    public function new_smarty(){
        $smarty=new Smarty();
        $smarty->caching=false;
        $smarty->template_dir=INDEX_DIR."Template";
        $smarty->compile_dir =INDEX_DIR."Temtr";
//        $smarty->cache_dir = INDEX_DIR.'Cache';
        return $smarty;
    }
}




