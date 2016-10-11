<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Document</title>
		<link rel="stylesheet" href="css/index.css" />
		<link rel="stylesheet" href="css/adminindex.css" />
	</head>
	<body>
		<!--头部-->
		<div id="header"> 
			<div class="logo">
				 <p><a href="index.php">首页</a></p>
				 <div>
				 	<?php
				 		require_once '../Model/member_login.php';
						//获取当前登录的用户名
						$loginedUser = getLoginedUser();
						if (false == $loginedUser) {//用户没有登录
							echo '<a href="login.php">登录</a>
								<a href="register.php">| 注册</a>';
						} else if( $_SESSION['admin'] == 1){//用户已经登录
							echo '欢迎您，' . $loginedUser . '!|';
							echo '<a href="admin.php">后台</a>';
							echo '<a href="logout.php">注销</a>';
						} else if($_SESSION['admin'] == 0){
							echo '欢迎您，' . $loginedUser . '!|';
							echo '<a href="logout.php">注销</a>';
						}
					?>
				 </div>
			 </div>
		</div>