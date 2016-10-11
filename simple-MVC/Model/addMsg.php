<?php
header("Content-type:text/html;charset=utf-8");
include_once '../Framework/mysql.php';
include_once 'tool.php';

connect();
if (isset($_POST['submit'])) {
	if (empty($_POST['title'])) {
		skip('../View/addmsg.php', 'error', '标题不得为空！');
	}else if (mb_strlen($_POST['title']) > 32) {
		skip('../View/addmsg.php', 'error', '标题长度不要超过32个字符！');
	}else if (empty($_POST['content'])) {
		skip('../View/addmsg.php', 'error', '信息内容不能为空！');
	}else{
		$query = "select * from message where title ='{$_POST['title']}'";
		$result = mysql_query($query);
		if (mysql_num_rows($result)) {
			skip('../View/addmsg.php', 'error', '这个标题已经存在了！');
		}else{
			include_once 'image.php';
			$src = 'img/' . $imgName;
			$sql = "insert into message(title,content,src) values('{$_POST['title']}','{$_POST['content']}','{$src}')";
			if (mysql_query($sql)) {
				skip('../View/addmsg.php', 'ok', '信息添加成功！');
			} else {
				skip('../View/addmsg.php', 'error', '信息添加失败！');
			}
		}
	}
}else{
	skip('../View/addmsg.php', 'error', '添加信息的表单未提交成功！');
}
?>