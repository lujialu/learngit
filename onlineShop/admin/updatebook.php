<?php
   //print_r($_POST);
   //print_r($_FILES);
   if(isset($_POST)){
		require 'mysql.php';
	 	$link = new MyDB();
		$link->getConn();
		if(!$_FILES){
			$query = "update book set book_name='{$_POST['bookname']}',book_big_type='{$_POST['bigtype']}',book_small_type='{$_POST['smalltype']}',book_authod='{$_POST['authod']}',
			book_sheltime='{$_POST['sheltime']}',book_press='{$_POST['press']}',book_Introduction='{$_POST['intro']}',book_oriprice='{$_POST['price']}',book_discount='{$_POST['discount']}',book_amount='{$_POST['amount']}' 
			where book_id = '{$_POST['bookid']}'";
		}else{
			//图片路劲处理
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
			$query = "update book set book_name='{$_POST['bookname']}',book_img_address='$filePath',book_big_type='{$_POST['bigtype']}',book_small_type='{$_POST['smalltype']}',book_authod='{$_POST['authod']}',
			book_sheltime='{$_POST['sheltime']}',book_press='{$_POST['press']}',book_Introduction='{$_POST['intro']}',book_oriprice='{$_POST['price']}',book_discount='{$_POST['discount']}',book_amount='{$_POST['amount']}' 
			where book_id = '{$_POST['bookid']}'";
		}
		
		$result = $link->GetData($query);
		if($link->GetAffectedRows()){
			echo "success";
		}else{
			echo "failed";
		}
		
	
	
   }
?>