<?php

namespace Core;

class DB
{
    /**
     * 连接数据库，数据库配置在根目录的Config/config.php
     */
    public function db_connect()
    {
        $config = require INDEX_DIR . "Config/config.php";
        $db = $config['database'];
        $conn = mysqli_connect($db['host'], $db['user'], $db['password'], $db['database'], $db['port']);
        if ($conn) {
            return $conn;
        }
        echo json_encode(array("item" => 8));
        die();
    }

    /**
     * 执行SQL语句操作
     * @param $query SQL语句
     * @return void 返回SQL语句执行结果
     */
    public function db_query($query)
    {
        $result = mysqli_query(self::db_connect(), $query);
//        echo $query;
        if ($result) {
            return $result;
        }
//        echo $query;
        echo json_encode(array("item" => 9));
        die();
    }

    /**
     * 把数据库遍历所得的数据转化为数组
     * 数组格式array(0=>第1条记录,1=>第2条记录,2=>第3条记录)
     */
    public function data_array($result)
    {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }

    /**
     * 遍历表所有数据
     * @param $tablename string 表名
     * @param $fields array 提去出的字段
     * @return array rows为查询到的记录条数，data为查询到的数据
     * data格式为(array["data"][0]=>第1条记录,array["data"][1]=>第2条记录,array["data"][2]=>第3条记录)
    */
    public function db_search($tablename,$fields=null){
        if ($fields && is_array($fields)) {
            $field_name = implode(",", $fields);
        }
        if ($fields == null) {
            $field_name = "*";
        }
        $query="select $field_name from $tablename";
        $result = self::db_query($query);
        $row = mysqli_num_rows($result);
        $data = "";
        if ($row > 0) {
            $data = self::data_array($result);
        }
        return array("rows" => $row, "data" => $data);
    }

    /**
     * 数据遍历，and关键字
     * @param $tablename 表名
     * @param $fields 提取出的字段 为数组形式，数值为要提取的字段，默认为空（即提取所有字段），格式为("字段1","字段2","字段3")
     * @param $condition 条件 为数组形式，键值为列名，数值为条件，格式为("列名"=>"条件")
     * 例如("user",array("id","username","password"),array("username"=>"admin"))
     * @return array rows为查询到的记录条数，data为查询到的数据，data格式为(array["data"][0]=>第1条记录,array["data"][1]=>第2条记录,array["data"][2]=>第3条记录)
     */
    public function db_search_and($tablename, $condition, $fields = null)
    {
        $a = "";
        $b = 0;
        if (!is_array($condition)) {
            echo json_encode(array("item" => 10));
        }
        if ($fields && is_array($fields)) {
            $field_name = implode(",", $fields);
        }
        if ($fields == null) {
            $field_name = "*";
        }
        foreach ($condition as $k => $v) {
            $a = $a . "$k='$v'";
            $b++;
            if ($b < count($condition)) {
                $a = $a . " and ";
            }
        }
        $query = "select $field_name from $tablename where $a";
        $result = self::db_query($query);
        $row = mysqli_num_rows($result);
        $data = "";
        if ($row > 0) {
            $data = self::data_array($result);
        }
        return array("rows" => $row, "data" => $data);
    }

    /**
     * 数据遍历，or关键字
     * @param $tablename 表名
     * @param $fields 提取出的字段 为数组形式，数值为要提取的字段，默认为空（即提取所有字段），格式为("字段1","字段2","字段3")
     * @param $condition 条件 为数组形式，键值为列名，数值为条件，格式为("列名"=>"条件1,条件2")
     * 例如("user",array("id","username","password"),array("username"=>array("admin","管理员")))
     * @return array rows为查询到的记录条数，data为查询到的数据，data格式为(array["data"][0]=>第1条记录,array["data"][1]=>第2条记录,array["data"][2]=>第3条记录)
     */
    public function db_search_or($tablename, $condition, $fields = null)
    {
        $a = "";
        $b = 0;
        $c = 0;
        if (!is_array($condition)) {
            echo json_encode(array("item" => 10));
            die();
        }
        if ($fields && is_array($fields)) {
            $field_name = implode(",", $fields);
        }else{
            $field_name = "*";
        }
        foreach ($condition as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $value) {
                    $a = $a . "$k='$value'";
                    $c++;
                    if ($c < count($v)) {
                        $a = $a . " or ";
                    } else {
                        $c = 0;
                    }
                }
                //已进行了一次循环所以b要+1
                $b++;
                //判断是否为最后一个条件，如果不是，再在后面接个or关键字，继续添加条件
                if ($b < count($condition)) {
                    $a = $a . " or ";
                }
            } else {
                $a = $a . "$k='$v'";
                $b++;
                if ($b < count($condition)) {
                    $a = $a . " or ";
                }
            }
        }
        $query = "select $field_name from $tablename where $a";
//        echo $query;
        $result = self::db_query($query);
        $row = mysqli_num_rows($result);
        $data = "";
        if ($row > 0) {
            $data = self::data_array($result);
        }
        return array("rows" => $row, "data" => $data);
    }


    /**
     * 数据插入操作
     * @param $tablename 要插入的表名
     * @param $data 要插入的数据，为数组形式，键值为列名，数值为数据，格式为array("列名"=>"数据")
     * @return bool true表示插入成功 false表示插入失败
     */
    public function db_insert($tablename, $data)
    {
        if (!is_array($data)) {
            echo json_encode(array("item" => 10));
            die();
        }
        foreach ($data as $k => $v) {
            $fields[] = $k;
            $value[] = $v;
        }
        $a = "(" . implode(",", $fields) . ")";
        $b = "('" . implode("','", $value) . "')";
        $query = "insert into $tablename{$a} value $b";
//        echo $query;
        $result = self::db_query($query);
        if ($result) {
            return true;
        }
        return false;
    }

    /**
     * 更新数据库数据，and关键字
     * @param $tablename string 表名
     * @param $condition array 更新条件，格式array("列名1"=>"条件","列名2"=>"条件")
     * @param $data array 更新数据，格式array("列名1"=>"数据","列名2"=>"数据")
     * @return bool true为更新成功，false为更新失败
     */
    public function db_update_and($tablename, $condition, $data)
    {
        $a = "";
        $b = 0;
        $c = "";
        $d = 0;
        $e = 0;
        if (!is_array($condition) && !is_array($data)) {
            echo json_encode(array("item" => 10));
            die();
        }
        foreach ($condition as $k => $v) {
            $a = $a . "$k='$v'";
            $b++;
            if ($b < count($condition)) {
                $a = $a . " and ";
            }
        }
        foreach ($data as $k2 => $v2) {
            $c = $c . "$k2='$v2'";
            $d++;
            if ($d < count($data)) {
                $c = $c . ",";
            }
        }
        $query = "update $tablename set $c where $a";
//        echo $query;
        $result = self::db_query($query);
        if ($result) {
            return true;
        }
        return false;
    }

    /**
     * 更新数据库数据，or关键字
     * @param $tablename string 表名
     * @param $condition array 更新条件，格式array("列名1"=>"条件1，条件2","列名2"=>"条件1")
     * @param $data array 更新数据，格式array("列名1"=>"数据","列名2"=>"数据")
     * @return bool true为更新成功，false为更新失败
     */
    public function db_update_or($tablename, $condition, $data)
    {
        $a = "";
        $b = 0;
        $c = "";
        $d = 0;
        $e = 0;
        if (!is_array($condition) && !is_array($data)) {
            echo json_encode(array("item" => 10));
            die();
        }
        foreach ($condition as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $value) {
                    $a = $a . "$k='$value'";
                    $e++;
                    if ($e < count($v)) {
                        $a = $a . " or ";
                    } else {
                        $e = 0;
                    }
//                    echo $a;
                }
                $b++;
                if ($b < count($condition)) {
                    $a = $a . " or ";
                }
            } else {
                $a = $a . "$k='$v'";
                $b++;
                if ($b < count($condition)) {
                    $a = $a . " or ";
                }
            }
        }
        foreach ($data as $k2 => $v2) {
            $c = $c . "$k2='$v2'";
            $d++;
            if ($d < count($data)) {
                $c = $c . ",";
            }
        }
        $query = "update $tablename set $c where $a";
//        echo $query;
        $result = self::db_query($query);
        if ($result) {
            return true;
        }
        return false;
    }
}



