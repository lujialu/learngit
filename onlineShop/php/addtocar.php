<?php
   sleep(1);
   if(isset($_POST['bookid'])&&isset($_POST['booknum'])){
   		require 'mysql.php';
	    $carlink = new MyDB();
		$carlink->GetConn();
		$carquerydata = "select * from shopcar";
		$carresult = $carlink->GetData($carquerydata);
		$isrepeat = false;
		while(!!$rows = mysqli_fetch_assoc($carresult)){
			if($rows['shopcar_book_id']==$_POST['bookid']&&$rows['shopcar_user']==$_COOKIE['user']){
				$booknum = $_POST['booknum'] + $rows['shopcar_booknum'];
				$carupdate = "update shopcar set shopcar_booknum = $booknum where shopcar_id = {$rows['shopcar_id']}";
				$carlink->GetData($carupdate);
				if($carlink->GetAffectedRows()){
					echo "success";
				}else{
					echo "fali1";
			    	sleep(3);
				}
				$isrepeat = true;
			}
		}
		if(!$isrepeat){
			$carquery = "insert into shopcar(shopcar_book_id,shopcar_user,shopcar_time,shopcar_booknum) values('{$_POST['bookid']}','{$_COOKIE['user']}',NOW(),'{$_POST['booknum']}')";
			$carlink->GetData($carquery);
			if($carlink->GetAffectedRows()){
				echo "success";
			}else{
				echo "fali2";
		    	sleep(3);
			}
		}
		
   }else{
   		echo "fali3";
	    sleep(3);
   }
?>
