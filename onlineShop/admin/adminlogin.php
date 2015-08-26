<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>千百度网上书店--管理端</title>
<script type="text/javascript"src="../js/jquery.js"> </script>
<script type="text/javascript"src="../js/jquery.ui.js"> </script>
<script type="text/javascript"src="../js/jquery.cookie.js"> </script>
<script type="text/javascript"src="admin.js"> </script>


<link rel="shortcut icon" type="image/x-icon" href="../image/11.ico" />
<link rel="stylesheet" type="text/css" href="../smoothness/jquery.ui.css" />
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<div id="admin_main">
		<div id="log">
			<h1>千百度书店后台登录</h1>
			<form action="logvali.php" method="post">
				<p><span>管理员账号</span><input type="text" name="admin"></p>
				<p><span>密码</span><input type="password" name="psw"></p>
				<h3><input type="submit" value="登录"></h3>
			</form>
		</div>
	</div>
</body>
</html>