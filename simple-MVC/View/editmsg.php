<?php
include_once '../Framework/mysql.php';
include_once '../Model/tool.php';
connect();

$sql = "select * from message1 where id = '{$_GET['id']}'";	
$result = mysql_query($sql);
$row=mysql_fetch_assoc($result);

if (isset($_POST['submit'])) {
	$sql = "update message1 set title = '{$_POST['title']}', content = '{$_POST['content']}' where id = '{$_GET['id']}'";
	if(mysql_query($sql)){ 
		echo '<script> alert("信息修改成功！"); 
		window.location.href="admin.php"; </script>';
		//header("Location: admin.php");  
	}else{ 
		skip('admin.php', 'error', '信息修改失败！');
	}
}
?>
<?php
include_once 'adminheader.php';
?>
		<div class="right">
			<form action="" method="post">
				<h3>修改信息</h3>
				<div>
					信息标题：
					<input type="text" name="title" value="<?php echo $row['title']; ?>"/>
				</div>
				<div>
					信息内容：
					<br>
					<textarea name="content"><?php echo $row['content']; ?></textarea>
				</div>
				<div>
					<input type="submit" name="submit" value="修改" />
				</div>
			</form>
	</div>
</div>
<!--尾部-->
<?php
include_once 'footer.php';
?>
