<?php
header("Content-type:text/html;charset=utf-8");

function createPage($url, $currentPage, $pageCount) {
	//得到的html代码是通过拼接字符串得到的
	//"上一页"和"下一页"
	$lastPage = $currentPage - 1;
	$nextPage = $currentPage + 1;
	//构造分页码
	$html = '<ul class="page">';
	$html .= '<li><a href="' . $url . '?page=1">首页</a></li>';
	$html .= '<li><a href="' . $url . '?page=' . $lastPage . '">上一页</a></li>';
	//处理“当前页”
	$html .= '<li>' . $currentPage . '</li>';
	$html .= '<li><a href="' . $url . '?page=' . $nextPage . '">下一页</a></li>';
	$html .= '<li><a href="' . $url . '?page=' . $pageCount . '">末页</a></li>';
	$html .= '</ul>';
	return $html;
}
?>

