<?php
include_once '../Framework/db.php';
//加载分页相关配置
$pageConfig =
require_once '../Model/page.php';

//获取所有留言信息,记录在$msgs的变量中
$msgs = getAllMsgs();
//print_r($msgs);

//获取当前页码
if (isset($_GET[$pageConfig['page_params']])) {
	$currentPage = $_GET[$pageConfig['page_params']];
} else {
	$currentPage = 1;
}

//当前页码的健壮性考虑
//当前页码至少要大于0
if ($currentPage <= 0) {
	$currentPage = 1;
}
//当前页码不能大于总页码
$pageCount = ceil(getMsgCount() / $pageConfig['page_size']);
if ($currentPage > $pageCount) {
	$currentPage = $pageCount;
}
//获取指定个数的留言数
$msgs = getMsgsByPageNumber($currentPage, $pageConfig['page_size']);
?>
<?php
include_once 'header.php';
?>
<!--中部-->
<div id="content">
	<ul class="section">
		<?php
			foreach ($msgs as $row) {
				echo "
					<li>
					    <p><img src='{$row['src']}' alt='' /></p>
					    <p>{$row['title']}</p>
						<p>{$row['content']}</p>
					</li>";
			}
		?>
	</ul>
<?php
require_once '../Model/pages.php';
//$_SERVER['PHP_SELF']：获取当前页面地址
echo createPage($_SERVER['PHP_SELF'],$currentPage, $pageCount);	
?>
</div>
<?php
include_once 'footer.php';
?>
