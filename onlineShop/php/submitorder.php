<?php
	if(isset($_POST)){
		session_start();
		require 'mysql.php';
		$linkorder = new MyDB();
		$linkorder->getConn();
		foreach ($_SESSION['bookitems'] as $value) {
			$delgoodquery = "delete from shopcar where shopcar_id = '$value'";
			$delgoodresult =$linkorder->getData($delgoodquery);
			if(!$delgoodresult){
				exit();
			}
		}
		$linkquery = "insert into bookorder(order_user,order_address,order_payway,order_book_id,order_money,order_time) values('{$_COOKIE['user']}','{$_POST['order_address']}','{$_POST['order_payway']}','{$_POST['order_book_id']}','{$_POST['order_money']}',NOW())";
		$linkorder->GetData($linkquery);
		if($linkorder->GetAffectedRows()){
			echo "success";
		}else{
			echo "falied";
		}
	}
?>