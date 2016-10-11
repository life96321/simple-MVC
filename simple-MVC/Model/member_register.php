<?php
session_start();
include_once '../Framework/mysql.php';
include_once 'tool.php';
connect();
if (isset($_POST['submit'])) {
	if (empty($_POST['name'])) {
		skip('../View/register.php', 'error', '用户名不得为空！');
	}else if (mb_strlen($_POST['name']) > 32) {
		skip('../View/register.php', 'error', '用户名长度不要超过32个字符！');
	}else if (mb_strlen($_POST['pw']) < 6) {
		skip('../View/register.php', 'error', '密码不得少于6位！');
	}else if ($_POST['pw'] != $_POST['confirm_pw']) {
		skip('../View/register.php', 'error', '两次密码输入不一致！');
	}else{
		$query = "select * from member where name ='{$_POST['name']}'";
		$result = mysql_query($query);
		if (mysql_num_rows($result)) {
			skip('../View/register.php', 'error', '这个用户名已经被别人注册了！');
		}else{
			$query = "insert into member(name,pw,register_time) values('{$_POST['name']}',md5('{$_POST['pw']}'),now())";
			if (mysql_query($query)) {
				$_SESSION['name'] = $_POST['name'];
				$_SESSION['pw'] = sha1(md5($_POST['pw']));
//				$_SESSION['vcode'] = $_POST['vcode'];
				skip('../View/index.php', 'ok', '注册成功！');
			} else {
				skip('../View/register.php', 'error', '注册失败，请重试！');
			}
		}
	}
}
?>