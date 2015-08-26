<?php
  require 'mysql.php';
  $showlink = new MyDB();
  $showlink->GetConn();
  $showquery = 'select * from address where address_user="'.$_COOKIE['user'].'"';
  $showresult=$showlink->getData($showquery);
  $showjson = '';
  while($row = mysqli_fetch_assoc($showresult)){
		foreach ($row as $key => $value) {
			$row[$key] = urlencode(str_replace('\n','',$value));
		}
		$showjson.=urldecode(json_encode($row)).',';
	}
	echo '['.substr($showjson, 0,strlen($showjson)-1).']';
?>