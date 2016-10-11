<?php
include_once '../Framework/mysql.php';
include_once 'tool.php';
connect();
//echo $_GET['id'];
$query = "delete from message where id = {$_GET['id']}";
if(mysql_query($query)){
	skip('../View/admin.php', 'ok', '删除成功！');
}else{
	skip('../View/admin.php', 'error', '删除失败！');
}
?>