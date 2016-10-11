<?php
//连接数据库
function connect() {
	mysql_connect("localhost", "root", "");
	mysql_select_db("0301");
	mysql_query("set names utf8");
}
?>