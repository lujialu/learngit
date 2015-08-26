<?php
  require 'mysql.php';
  $link = new MyDB();
	$link->getConn();
	$_sql = $link->GetData("select count(*) as count from liuyanban");
	//$_sql = $link->GetData("select * from liuyanban");
	$_result = mysqli_fetch_assoc($_sql);
	$_pagesize = 5;
	$_count = ceil($_result['count']/$_pagesize);
	$_page = 1;
	if(!isset($_POST['page'])){
		$_page = 1;
	}else{
		$_page = $_POST['page'];
		if($_page>$_count){
			$_page = $_count;
		}
	}
	$_limit = ($_page-1)*$_pagesize;
	$re = "select ({$_count}) AS count, user_name,content from liuyanban order by content_date desc LIMIT {$_limit} , {$_pagesize}";
	$query = $link->getData($re) or die('SQL error!');
	$json = '';
	while($row = mysqli_fetch_assoc($query)){
		foreach ($row as $key => $value) {
			$row[$key] = urlencode(str_replace('\n','',$value));
		}
		$json.=urldecode(json_encode($row)).',';
	}
	echo '['.substr($json, 0,strlen($json)-1).']';
?>