<?php

namespace Core;

class Action{
    public function feedback(){
        $smarty=Smarty_new::new_smarty();
        if(!$_GET['item']){
            $item=1;
            $message="无效访问！";
        }
        if($_GET['item']=='0'){
            $item=0;
            $message="提交成功！";
        }
        if(isset($_GET['item']) && $_GET['item']!=0){
            $message=self::get_message($_GET['item']);
            $item=$_GET['item'];
        }
//        $item=$_GET['item'];
        $smarty->assign("item",$item);
        $smarty->assign("message",$message);
        $smarty->display("feedback.html");
    }

    public function get_message($item){
        $message_list=require INDEX_DIR."Config/item.php";
        if($message_list[$item]){
            return $message_list[$item];
        }
        return $item;
    }
}



