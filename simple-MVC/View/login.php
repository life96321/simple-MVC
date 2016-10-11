<!--头部-->
<?php
include_once 'header.php';
?>
<!--中部-->
<div id="content">
	<div class="section">
		<form action="../Model/member_login.php" method="post">
			<h3>欢迎登录</h3>
			<div>
				<span>用户名：</span>
				<input type="text" name="name"/>
			</div>
			<div style="margin-left: 15px;">
				<span>密码：</span>
				<input type="password" name="pw"/>
			</div>
			<div>
				<span>验证码：</span>
				<input type="text" name="vcode"/>
			</div>
			<div>
				<img src="show_vcode.php" alt="" />
			</div>
			<div style="margin-left: 70px;">
				<input type="submit" name="submit" value="登录" class="sub"/>
			</div>
		</form>
	</div>
</div>
<!--尾部-->
<?php
include_once 'footer.php';
?>

