<!--头部-->
<?php
include_once 'adminheader.php';
?>
		<div class="right">
			<form action="../Model/addMsg.php" method="post" enctype="multipart/form-data">
				<h3>添加信息</h3>
				<div>
					信息标题：
					<input type="text" name="title" />
				</div>
				<div>
					信息内容：
					<br>
					<textarea name="content"></textarea>
				</div>
				<div>要添加的图片：<input type="file" name="file"/></div>
				<div>
					<input type="submit" name="submit" value="添加" />
				</div>
			</form>
		</div>
	</div>
</div>
<!--尾部-->
<?php
include_once 'footer.php';
?>
