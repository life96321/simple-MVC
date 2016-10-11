<?php
//实现用户注销
//设置编码
header("Content-type:text/html;charset=utf-8");

//引入函数库
require_once '../Model/user.php';

//实现用户注销
doUserLogout();

//注销后的处理
header('Location: index.php');
?>