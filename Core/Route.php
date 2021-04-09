<?php

namespace Core;

use Core\Session;

class Route{

    /**
     * 执行路由规则
    */
    public function start(){
        //检测用户是否登录,如果登录则执行已登录后的用户规则
        if(Session::check()){
            self::doing(self::url_change(self::get_url_logined()));
            return ;
        }
        self::doing(self::url_change(self::get_url()));
    }

    /**
     * 获取路由信息
    */
    public function get_url(){
        if($_GET['p']){
            $action_name=$_GET['p'];
        }else{
            $action_name="index";
        }
        $router_list=require INDEX_DIR."Config/router.php";
        if($router_list['route'][$action_name]){
            return $router_list['route'][$action_name];
        }
        echo json_encode(array("item"=>1));
        die();
    }

    /**
     * 针对已登录的用户，获取已登录后获取到的路由信息
    */
    public function get_url_logined(){
        if($_GET['p']){
            $action_name=$_GET['p'];
        }else{
            $action_name="index";
        }
        $router_list=require INDEX_DIR."Config/router.php";
        if($router_list['route'][$action_name]){
            return $router_list['route'][$action_name];
        }
        if($router_list['user_route'][$action_name]){
            return $router_list['user_route'][$action_name];
        }
        echo json_encode(array("item"=>1));
        die();
    }

    /**
     * action方法检测，检测命名空间下是否有指定action方法
    */
    public function url_change($route_url){
        $url_explode=explode('.',$route_url);
        $action=str_replace(".","::",$route_url);
        if(method_exists($url_explode[0],$url_explode[1])){
            return $action;
        }
        echo json_encode(array("item"=>2));
        die();
    }

    /**
     * 执行方法
    */
    public function doing($action){
        $action();
    }

}


