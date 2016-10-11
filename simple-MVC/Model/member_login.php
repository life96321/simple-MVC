<?php
session_start();
include_once '../Framework/mysql.php';
include_once 'tool.php';
include_once 'user.php';
connect();
if (isset($_POST['submit'])) {
	if (empty($_POST['name'])) {
		skip('../View/login.php', 'error', '用户名不得为空！');
	} else if (mb_strlen($_POST['name']) > 32) {
		skip('../View/login.php', 'error', '用户名长度不要超过32个字符！');
	} else if (empty($_POST['pw'])) {
		skip('../View/login.php', 'error', '密码不得为空！');
	}else{
		$query = "select * from member where name='{$_POST['name']}' and pw=md5('{$_POST['pw']}')";
		$result = mysql_query($query);
		if (mysql_num_rows($result) == 1) {
			$row = mysql_fetch_row($result);
			//var_dump($row);
			$_SESSION['name'] = $_POST['name'];
			$_SESSION['pw'] = sha1(md5($_POST['pw']));
			$_SESSION['admin'] = $row[4];
			//echo $_SESSION['admin'];
			skip('../View/index.php', 'ok', '登录成功');
		} else {
			skip('../View/login.php', 'error', '用户名或密码错误！');
		}
	}
}
?>