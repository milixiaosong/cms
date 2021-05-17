<?php

namespace Core;

class Session
{
    /**
     * 创建session会话
     * @param $userdata array 用户数据
     * @return bool false为创建失败 true表示创建成功
     */
    public function session_create($userdata)
    {
        if (!is_array($userdata)) {
            return false;
        }
        session_start();
        $_SESSION['username'] = $userdata['username'];
        $_SESSION['role_id'] = $userdata['role_id'];
        $_SESSION['is_active'] = $userdata['is_active'];
        session_write_close();
        return true;
//        self::session_delete();
//        return false;
    }

    /**
     * 检测用户是否登录
     */
    public function session_check()
    {
        session_start();
        $username = $_SESSION['username'];
        $role_id = $_SESSION['role_id'];
        $is_active = $_SESSION['is_active'];
        session_write_close();
        if (isset($username) && isset($role_id) && isset($is_active)) {
            return true;
        }
        return false;
    }

    /**
     * 删除session的内容
     */
    public function session_delete()
    {
        session_start();
        session_destroy();
        session_write_close();
    }

}


