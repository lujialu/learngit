<?php
   require 'mysql.php';
   $link = new MyDB();
   $link->GetConn();
   $bookid = $_POST['bookid'];
   $booknum = $_POST['booknum'];
   $user = $_COOKIE['user'];
   $query = "update shopcar set shopcar_booknum = $booknum where shopcar_user='$user' and shopcar_book_id='$bookid'";
   $result = $link->getData($query);
   if($link->GetAffectedRows()){
   		echo "success";
   }else{
   		echo "failed";
   }
?>