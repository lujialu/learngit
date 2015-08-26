<?php
	require 'mysql.php';
    if(isset($_POST['comment_praise'])){
    	$consql = new MyDB();
		$consql->GetConn();
		$query = "update comment set comment_praise = '{$_POST['comment_praise']}' where comment_id = '{$_POST['comment_id']}'";
		$consql->GetData($query);
		if($consql->GetAffectedRows()){
			echo "success";
		}else{
			echo "failed";
		}
    }
?>