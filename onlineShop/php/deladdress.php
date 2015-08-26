<?php
    if(isset($_POST['address_id'])){
    	require 'mysql.php';
		$dellink = new MyDB();
		$dellink->GetConn();
		$delquery = "delete from address where address_id={$_POST['address_id']}";
		$dellink->getData($delquery);
		if(!!$dellink->GetAffectedRows()){
			echo 'successdel';
		}else{
			echo "faildel";
		}
    }
?>