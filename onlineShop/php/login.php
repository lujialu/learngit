<?php
    require 'mysql.php';
	$link = new MyDB();
	$link->getConn();
	$_pass = sha1($_POST['login_pass']);
	
	$query = $link->getData("select user_name, user_pass from user where user_name ='{$_POST['login_user']}' and user_pass ='{$_pass}'") or die('SQL 错误！');
	
	if(mysqli_fetch_assoc($query)){
		echo "true";
	}else{
		echo 'false';
	}
	
?>