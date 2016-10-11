<!--头部-->
<?php
include_once 'header.php';
?>
<!--中部-->
<div id="content">
	<div class="section">
		<form action="../Model/member_register.php" method="post">
			<h3>注册界面</h3>
			<div>
				<span>用户名：</span>
				<input type="text" name="name"/>
				用户名不得为空，并且长度不得超过32个字符
			</div>
			<div style="margin-left: 15px;">
				<span>密码：</span>
				<input type="password" name="pw"/>
				密码不得少于6位
			</div>
			<div style="margin-left: -15px;">
				<span>确认密码：</span>
				<input type="password" name="confirm_pw"/>
				请输入与上面一致
			</div>
			<div>
				<span>验证码：</span>
				<input type="text" name="vcode"/>
				请输入下方验证码
			</div>
			<div>
				<img src="show_vcode.php" alt="" />
			</div>
			<div style="margin-left: 70px;">
				<input type="submit" name="submit" value="注册" class="sub"/>
			</div>
		</form>
	</div>
</div>
<!--尾部-->
<?php
include_once 'footer.php';
?>
