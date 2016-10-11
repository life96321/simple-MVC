<?php
require_once '../Framework/mysql.php';
include_once 'member_login.php';
//获取当前登录的用户
function getLoginedUser() {
	if (isset($_SESSION['name'])) {
		return $_SESSION['name'];
	}
	return false;
}
//实现用户注销操作
function doUserLogout() {
	unset($_SESSION['name']);
	session_destroy();
}
?>