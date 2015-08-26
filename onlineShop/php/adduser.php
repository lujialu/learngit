<?php
    require 'mysql.php';
    
  $link = new MyDB();
	$link->getConn();
	$query = "INSERT INTO user (user_name, user_pass, user_email,user_phone,reg_time)
	VALUES ('{$_POST['user']}', sha1('{$_POST['pass']}'), '{$_POST['email']}',
	'{$_POST['phone']}',  NOW())";
	//echo "$query";
	$link->getData($query) or die('新增失败！'.mysqli_error());
	echo $link->GetAffectedRows();
?>