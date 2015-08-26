<?php 
if(empty($_GET)&&empty($_POST)){
	header('Location:index.php');
	exit();
}
// if(isset($_POST['multitypes'])){
	// print_r($_POST);
// }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>千百度网上书店--搜索</title>

<script type="text/javascript"src="js/jquery.js"> </script>
<script type="text/javascript"src="js/jquery.validate.js"> </script>
<script type="text/javascript"src="js/jquery.form.js"> </script>
<script type="text/javascript"src="js/jquery.ui.js"> </script>
<script type="text/javascript"src="js/reg.js"> </script>
<script type="text/javascript"src="js/jquery.cookie.js"> </script>
<script type="text/javascript"src="js/searchphp.js"> </script>
<script type="text/javascript"src="js/func.js"> </script>


<link rel="shortcut icon" type="image/x-icon" href="image/11.ico" />
<link href="css/style.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="smoothness/jquery.ui.css" />
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/reg.css">
<link rel="stylesheet" type="text/css" href="css/search.css">
<script>
$(function(){
	$('#searchButton').click(function(){
		var search = new Object;
		search['book_name'] = $('#book_name').val();
		search['book_authod'] = $('#book_authod').val();
		search['book_small_type'] = $('#book_small_type').val();
		var search2 = new Object;
		search2['book_discount'] = $('#book_discount').val();
		var book_nowprice = $('#book_nowprice').val();
	    var sql = 'select * from book where ';
	    var bool = false;
	    for(var i in search){
	    	if(search[i]!=""){
	    		bool = true;
	    		//alert(i+"|"+search[i]);
	    		sql += i+" like "+"'%"+search[i]+"%' and ";
	    	}
	    }
	    for(var j in search2){
	    	if(search2[j]!=""){
	    		bool = true;
	    		sql += j+" between "+search2[j]+' and ';
	    	}
	    }
	    if(book_nowprice!=''){
	    	bool = true;
	    	sql+="book_oriprice*book_discount between "+book_nowprice+' and ';
	    }
	    sql = sql.substring(0,sql.length-4);
	    if(bool){
	    	$('#search_info').val(sql);
	    	$('#search-form').submit();
	    }
		
	});
});
</script>

</head>
<body>
	<p id="gettype" style="display:none"><?php if(isset($_GET['type']))echo $_GET['type'];?></p>
	<p id="getbookname" style="display:none"><?php if(isset($_GET['bookname']))echo $_GET['bookname'];?></p>
	<p id="getsmalltype" style="display:none"><?php if(isset($_GET['smalltype']))echo $_GET['smalltype'];?></p>
	<p id="getauthod" style="display:none"><?php if(isset($_GET['authod']))echo $_GET['authod'];?></p>
	<p id="getmultitypes" style="display:none"><?php if(isset($_POST['multitypes']))echo $_POST['multitypes'];?></p>
	<p id="getpress" style="display:none"><?php if(isset($_GET['press']))echo $_GET['press'];?></p>
	<form action="search.php" id="search-form" method="post" style="display: none"><input type="text" name="multitypes" id = "search_info" value=""/></form>
	<!--header-->
	
	<?php
		require 'php/header.php';
	?>
	<div id="search-main">
		<div id="search-left">
			
		</div>
		<div id="search-top">
			<h2>高级搜索<span><input type="button" id="shouqihexianshi" value="收起高级搜索"/><span></h2>
			<div id="search-content">
				<form action="" method="post">
					<div id="search-content-left">
						<p><span>书    名：</span><input type="text" id="book_name"/></p>
						<p><span>作    者：</span><input type="text" id="book_authod"/></p>
						<p><span>出版社：</span><input type="text" id="book_press"/></p>
					</div>
					<div id="search-content-right">
						<p><span>分    类：</span><select id="book_small_type"><option selected="selected" value="">全部</option><option value="小说">小说</option><option value="少儿">少儿</option><option value="历史">历史</option><option value="社会科学">社会科学</option><option value="旅游">旅游</option><option value="管理">管理</option><option value="计算机">计算机</option><option value="文学">文学</option><option value="外语">外语</option></select></p>
						<p><span>折    扣：</span><select id="book_discount"><option value="" selected="selected">全部</option><option value="0.1 and 0.3">3折以下</option><option value="0.3 and 0.5">3到5折</option><option value="0.5 and 0.7">5到7折</option><option value="0.7 and 1.0">7折及其以上</option></select></p>
						<p><span>价    格：</span><select id="book_nowprice"><option value="" selected="selected">全部</option><option value="0 and 10">0-10元</option><option value="10 and 30">10-30元</option><option value="30 and 50">30-50元</option><option value="50 and 100">50-100元</option><option value="100 and 10000">100元以上</option></select></p>
					</div>
					<div id="search-button">
						<input type="button" id="searchButton" value="搜索"/>
					</div>
			    </form>
			</div>
		</div>
		
		<div id="search-right">
			<div id = 'sortastype'>
				<input type="button" value="默认" id="defaultsort"/>
				<input type="button" value="销量" id="salesort"/>
				<input type="button" value="评价" id="commentsort"/>
				<input type="button" value="价格" id="pricesort"/>
				<input type="button" value="上架时间" id="timesort"/>
				<input type="button" value="折扣" id="discountsort"/>
			</div>	
			<div id="search-result">
				<!-- <div>
					<img src="http://image1.suning.cn/content/catentries/00000000010485/000000000104852073/000000000104852073_ls1.jpg" alt="图片"/>
					<div>
						<h3><a href="#">从你的全世界路过 : 让所有人心动的故事</a></h3>
						<p><a href="#">(948条评论)</a>作者：<a href="#">张嘉倪 </a>/2013-10-31/ 出版社： <a href="#">湖南文艺出版社</a></p>
						<p>十二像个讨人厌的朋友，总在最适合的时候说你最不爱听的话。你赌气地把她丢在一边，埋怨她太残忍。但在受伤时、迷茫时，你第一个想起她。她的文字像针，戳破心上的脓血，让毒素流出。又像一颗温柔的种子，为你的心种下平静，在急急忙忙的世界里不再慌张。诉说未来的人是...</p>
						<span class="hasgoods"><input type="button" value="加入购物车" id="addtoshopcar"/>&nbsp;&nbsp;&nbsp;有货    <span class="ori_price">原价￥60 </span> <span class="now_price">现价￥30</span></span>
					</div>
				</div>
				 -->
			</div>
			
			<p id="fenye"><span id = 'prevpage'>上页</span>
			<?php
				require 'php/func.php';
				//从主页中传过来的数据 type:图书类型  smalltype:图书小类型 authod：图书作者
				if(isset($_GET['type'])){
					_getpagesize("select book_id from book where book_big_type like '%{$_GET['type']}%'",10);
				}
				else if(isset($_GET['bookname'])){
					_getpagesize("select book_id from book where book_small_type like '%{$_GET['bookname']}%'",10);
				}
				else if(isset($_GET['smalltype'])){
					_getpagesize("select book_id from book where book_small_type like '%{$_GET['smalltype']}%'",10);
				}
				else if(isset($_GET['authod'])){
					_getpagesize("select book_id from book where book_authod like '%{$_GET['authod']}%'",10);
				}
				else if(isset($_GET['press'])){
					_getpagesize("select book_id from book where book_press like '%{$_GET['press']}%'",10);
				}
				else if(isset($_POST)){
					_getpagesize("{$_POST['multitypes']}",10);
				}else{
					echo "111111111111111111111";
				}
				
			?>
			
			<span id = 'nextpage'>下页</span>跳转至<input type="text" id="pagenum"/>页<span id="confirmIt" style="width:40px">确定 </span></p>
		</div>
	</div>
	
	
	<!--footer-->
	<?php
		require 'php/footer.php';
	?>
	<div id="sucadd" style="display: none"><h3>(～￣▽￣)～ 正在加入购物车...</h3></div>
</body>
</html>