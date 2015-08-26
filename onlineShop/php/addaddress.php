<?php
	require 'mysql.php';
	$addresslink = new MyDB();
	$addresslink->GetConn();
	$addressquery = "insert into address(address_user,address_receiver,address_area,address_full,address_phone,address_email)values ('{$_COOKIE['user']}','{$_POST['receiver']}','{$_POST['area']}','{$_POST['fulladdress']}','{$_POST['telphone']}','{$_POST['mail']}')";
	$addressresult = $addresslink->getData($addressquery);
	if(!!$addresslink->GetAffectedRows()){
		echo "success";
	}else{
		echo "failed";
	}
	
?>