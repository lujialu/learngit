<?php
	require 'mysql.php';
	$link = new MyDB();
	$link->getConn();
	$query = $link->getData("SELECT user_name FROM user WHERE user_name='{$_POST['user']}'") or die('SQL 错误！');
	
	if (mysqli_fetch_assoc($query)) {
		echo 'false';
	} else {
		echo 'true';
	}
	
?>