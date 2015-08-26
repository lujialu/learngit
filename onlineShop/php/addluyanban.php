<?php
   sleep(1);
   require 'mysql.php';
   $link = new MyDB();
	$link->getConn();
   $_user = mysql_real_escape_string($_POST['user']);
   $_content = mysql_real_escape_string($_POST['content']);
   $query = "insert into liuyanban(user_name,content,content_date) values ('{$_user}','{$_content}',NOW())";
   $link->getData($query) or die('新增失败！'.mysqli.error());
   echo $link->GetAffectedRows();
?>