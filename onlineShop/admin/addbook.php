<?php
	 //print_r($_POST);
	 //print_r($_FILES);
	 
	 require 'mysql.php';
	 $link = new MyDB();
	 $link->GetConn();
	 
	 
	 $getbookquery = "select * from book where book_name='{$_POST['bookname']}' and book_authod = '{$_POST['authod']}'";
	 $result = $link->getData( $getbookquery);
	 
	 if(!!$rows=mysqli_fetch_assoc($result)){
	 	echo "falied";
		exit();
	 }
	  //图片上传的网上处理
	  $j=1;
	 $MIMEs=array("application/msword","application/x-excel",
	 		"application/vnd.ms-powerpoint","application/pdf"," image/gif","image/png",
	 		"image/jpeg","text/plain","text/html","text/javascript");
	 $imageMIME = array("image/jpeg","image/gif","image/png","last");
	
	 foreach($_FILES as $data){
		 if($data["error"]>0){
		 	continue;
		 }else{
			foreach ($MIMEs as $mime){
		 		if($data["type"]==$mime&&$data["size"]<=5*1024*1024){
			 			$j++;
					 	foreach ($imageMIME as $image){
					 		if($data["type"]==$image){
					 			if (defined('SAE_STOREHOST')){
					 				$s2 = new SaeStorage();
					 				$name =$data['name'];
					 				$s2->upload('lustorage',$name,$data['tmp_name']);//把用户传到SAE的文件转存到名为test的storage
					 				$filePath = $s2->getUrl("lustorage",$name);//输出文件在storage的访问路径
					 			}else{
					 				$filePath = "upload/".$data["name"];
					 				move_uploaded_file($data["tmp_name"],$filePath);
					 			}
					 		break;
					 		}
					 	}
					 	break;
				 	}
		 	}
		 }
	  }
	
	
	
	$query = "insert into book(book_name,book_img_address,book_big_type,book_small_type,book_authod,book_sheltime,book_press,book_Introduction,book_oriprice,book_discount,book_amount)
	 values ('{$_POST['bookname']}','$filePath','{$_POST['bigtype']}','{$_POST['smalltype']}','{$_POST['authod']}','{$_POST['sheltime']}','{$_POST['press']}','{$_POST['intro']}','{$_POST['price']}','{$_POST['discount']}','{$_POST['amount']}')";
	//echo "$query";
	$link->getData($query);
	echo $link->GetAffectedRows();
	if($link->GetAffectedRows()!=0){
		echo "success";
	}else{
		echo "failed";
	}
	
	
	




?>