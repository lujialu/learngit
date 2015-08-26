<?php
	require 'mysql.php';
	/**
	 * _queryInfo 
	 * 功能：以JSON字符串的方式打印出从数据库返回的内容
	 * @access public
	 * @param string $_query 
	 * @return void
	 */
    function _queryInfo($_query){
    	global $row;
	 	$link = new MyDB();
		$link->getConn();
		$json = '';
		$result = $link->getData($_query) or die('查询失败！'.mysqli_error());
		$row = $link->GetAffectedRows();
		while (!!$row = mysqli_fetch_assoc($result)) {
			foreach ($row as $key => $value) {
				$row[$key] = urlencode(str_replace("\n", "", $value));
			}
			$json.=urldecode(json_encode($row)).',';
		}
		echo '['.substr($json,0, strlen($json)-1).']';
    }
	
	
	/**
	 * __getrownums
	 * 功能：取得 执行一个数据库语句后的 有效行数
	 * @access public
	 * @param string $_sql 
	 * @return number
	 */
	function _getrownums($_sql){
		$_conn = new MyDB();
		$_conn->getConn();
		$_result = $_conn->GetData($_sql); 
		$_num = $_conn->GetAffectedRows();
		return $_num;
	}
	
	/**
	 * ___getpagesize
	 * 功能：打印出所需要的分页的页数
	 * @access public
	 * @param string $_sql 
	 * @param int $_page
	 * @return void
	 */
	function _getpagesize($_sql,$_page){
		$_conn = new MyDB();
		$_conn->getConn();
		$_result = $_conn->GetData($_sql); 
		$_num = $_conn->GetAffectedRows();
		$_pagesize = $_page;
		$_pageabsolute = ceil($_num / $_pagesize);
		for ($i=0;$i<$_pageabsolute;$i++) {
			echo '<span class="pagenum">'.($i+1).'</span>';
		}   
	}
	
	
	/**
	 * _outbookjson
	 * 功能：输出指定查询语句的json数据
	 * @access public
	 * @param string $_booktype
	 * @param string $_sql
	 * @param int $_pagenum
	 * @return void
	 */
	function _outbookjson($_sql,$_pagesize){
		$_num = _getrownums($_sql);
		if (isset($_GET['page'])) {
			$_page = $_GET['page'];
			if (empty($_page) || $_page < 0 || !is_numeric($_page)) {
				$_page = 1;
			} else {
				$_page = intval($_page);
			}
		} else {
			$_page = 1;
		}
		if ($_num == 0) {
			$_pageabsolute = 1;
		} else {
			$_pageabsolute = ceil($_num / $_pagesize);
		}
		$GLOBALS['num'] = $_pageabsolute;
		if ($_page > $_pageabsolute) {
			$_page = $_pageabsolute;
		}
		$_pagenum = ($_page - 1) * $_pagesize;
			$query = $_sql."LIMIT $_pagenum,$_pagesize";
			_queryInfo($query);
	}
		
	
	
?>