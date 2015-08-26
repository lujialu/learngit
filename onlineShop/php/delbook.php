<?php
    $shopcarid = $_POST['shopcarid'];
	echo $shopcarid;
	require 'mysql.php';
	$link2 = new MyDB();
	$link2->GetConn();
	$querydel = "delete from shopcar where shopcar_id = $shopcarid";
	$delresult = $link2->GetData($querydel);
	if($link2->GetAffectedRows()){
		echo "success";
	}else{
		echo "failed";
	}
?>