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
<!--头部-->
<?php
include_once 'adminheader.php';
?>

		<div class="right">
			<ul class="ulone">
				<?php
					foreach ($msgs as $row) {
						echo "
							<li>
							    <p><img src='{$row['src']}' alt='' /></p>
							    <p>{$row['title']}</p>
								<p>{$row['content']}</p>
								<p><a href='editmsg.php?id={$row['id']}'>编辑</a>
								<a href='../Model/deleteMsg.php?id={$row['id']}'>删除</a></p>	
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
	</div>
</div>
<!--尾部-->
<?php
include_once 'footer.php';
?>
