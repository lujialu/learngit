<?php
	require 'func.php';
	if(!empty($_GET['booktype'])){
		$_booktype = $_GET['booktype'];
		$_sql = "select * from book where book_big_type like '%$_booktype%'";
	}
	if(!empty($_GET['bookname'])){
		$_booktype = $_GET['bookname'];
		$_sql = "select * from book where book_name like '%$_booktype%'";
	}
	
	if(!empty($_GET['smalltype'])){
		$_booktype = $_GET['smalltype'];
		$_sql = "select * from book where book_small_type like '%$_booktype%'";
	}
	if(!empty($_GET['authod'])){
		$_booktype = $_GET['authod'];
		$_sql = "select * from book where book_authod like '%$_booktype%'";
	}
	if(!empty($_GET['press'])){
		$_booktype = $_GET['press'];
		$_sql = "select * from book where book_press like '%$_booktype%'";
	}
	if(!empty($_GET['multitypes'])){
		$_sql = $_GET['multitypes'];
	}
	if(!empty($_POST)){
		$_sql = 'select * from book where ';
		foreach ($_POST as $key => $value) {
			$key = trim($key);
			$value = trim($value);
			if(!empty($value)){
				$_sql.= $key.' like '."'%$value%' and ";
			}
		}
		$_sql = substr($_sql,0,strlen($_sql)-4);
	}
	_outbookjson($_sql,10);
?>