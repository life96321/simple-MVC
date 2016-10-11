<?php
function skip($url,$pic,$message){
$html = '
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="refresh" content = "3;URL = '.$url.'" />
		<style type="text/css">
			.notice{
				width: 276px;
				margin: 0 auto;
			}
			.img{
				width: 18px;
				height: 18px;
				position: relative;
				margin-bottom: -3px;
			}
			.pic a{
				color: red;
				text-decoration: none;
			}
		</style>
		<title>正在跳转中</title>
	</head>
	<body>
		<div class="notice">
			<span class="pic">
				<img src="../View/img/'.$pic.'.png" alt="" class="img"/>
				'.$message.'
				<a href="'.$url.'">3秒钟后自动跳转</a>
			</span>
		</div>
	</body>
</html>
';
echo $html;
}		
?>