<?php
   if(isset($_POST)){
		require 'mysql.php';
	 	$link1 = new MyDB();
		$link1->getConn();
		$query = "select * from book where book_name like '%{$_POST['bkname']}%' limit 1";
		$result = $link1->GetData($query);
		if($result){
			while (!!$rows=mysqli_fetch_assoc($result)) {
				$json=json_encode($rows);
			}
			echo "$json";
			
		}else{
			echo "failed";
		}
	
	
   }
?>