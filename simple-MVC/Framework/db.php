<?php
include_once 'mysql.php';
//获取msgs表中的所有数据，返回的是二维数组的形式：$results
function getAllMsgs() {
	connect();
	$sql = "select * from message";
	$r = mysql_query($sql);
	$results = array();
	while ($row = mysql_fetch_assoc($r)) {
		$results[] = $row;
	}
	return $results;
}	
	
//获取指定页的记录（所有记录中的指定页记录）
//参数一  $page      第几页
//参数二  $pageSize  每一页的记录个数
//return 二维数组
function getMsgsByPageNumber($page = 1, $pageSize = 10) {
	//构造当前页开始记录的下标
	$pagebegin = ($page - 1) * $pageSize;
	connect();
	$sql = "select * from message limit {$pagebegin},{$pageSize}";
	$r = mysql_query($sql);
	$results = array();
	while ($row = mysql_fetch_assoc($r)) {
		$results[] = $row;
	}
	//返回结果集
	return $results;
}	
	
//获取留言板数据库所有记录的个数
function getMsgCount() {
	connect();
	$sql = "select * from message";
	$r = mysql_query($sql);
	return mysql_num_rows($r);
}
?>