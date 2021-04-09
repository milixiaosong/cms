<?php

namespace Code\Controller;

use Core\Smarty_new;

class Tool
{

    /**
     * @param $path 路径地址，如果是"/"则为系统的根目录
     * @return array 路径数组
     */
    public function get_dir($path)
    {
        $dir=INDEX_DIR.$path;
        if (!is_dir($path)) {
            return false;
        }
        //scandir方法
        $data = scandir($dir);
        foreach ($data as $value){
            if($value!="." && $value!=".." && is_dir($dir.$value)){
//                $dir2=$dir."/".$value;
                $arr[]=$value;
            }
        }
        return $arr;
    }

    public function show_addpage(){
        $smarty=Smarty_new::new_smarty();
        $root_url="Code/";
        $dir=self::get_dir($root_url);
        $smarty->assign("root_url",$root_url);
        $smarty->assign("dir1",$dir);
        $smarty->display("addroute.html");
    }

    public function get_new_dir(){
        $dir=$_GET['dir'];
        $result=self::get_dir($dir);
        echo json_encode($result);
    }

    public function add_router(){

    }
}



