<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>千百度网上书店--管理端</title>
<script type="text/javascript"src="../js/jquery.js"> </script>
<script type="text/javascript"src="../js/jquery.ui.js"> </script>
<script type="text/javascript"src="../js/jquery.validate.js"> </script>
<script type="text/javascript"src="../js/jquery.form.js"> </script>
<script type="text/javascript"src="../js/jquery.cookie.js"> </script>
<script type="text/javascript"src="../js/func.js"></script>
<script type="text/javascript"src="admin.js"> </script>


<link rel="shortcut icon" type="image/x-icon" href="../image/11.ico" />
<link rel="stylesheet" type="text/css" href="../smoothness/jquery.ui.css" />
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
<div id="ma_main">
	
	<div id="ma_head">
		<h2>千百度后台管理端</h2>
		<div id="tabs">
		  <ul>
		    <li><a href="#tabs-1">书籍管理</a></li>
		    <li><a href="#tabs-2">会员管理</a></li>
		    <li><a href="#tabs-3">订单管理</a></li>
		    <li><a href="#tabs-4">信息管理</a></li>
		    <li><a href="#tabs-5">图片轮播</a></li>
		    <li><a href="#tabs-6">最新上架</a></li>
		    <li><a href="#tabs-7">最热图书</a></li>
		  </ul>
		  <div id="tabs-1">
			  	<h3>添加书籍</h3>
				<div id="addbook">
					<form action = 'addbook.php' method = 'post' id = "bookinfo" enctype="multipart/form-data">
						<p><span>书名</span><input type="text" name="bookname"></p>
						<p><span>作者</span><input type="text" name="authod"></p>
						<p><span>大类型</span><select name="bigtype"><option id="">文学</option><option>诗歌</option><option>外语</option></select></p>
						<p><span>细类型</span><select name="smalltype"><option id="">玄幻</option><option>言情</option><option>恐怖</option></select></p>
						<p><span>出版时间</span><input type="text" name="sheltime" id="sheltime"></p>
						<p><span>出版社</span><input type="text" name="press"></p>
						<p><span>数量</span><input type="text" name="amount"></p>
						<p><span>图片</span><input type="file" name="bookimg"></p>
						<p><span>价格</span><input type="text" name="price"></p>
						<p><span>折扣</span><input type="text" name="discount" placeholder="请填写0.1到1之间的数"></p>
						<p><span>简介</span><textarea rows="3" cols="60" style="resize: none" name="intro"></textarea></p>
						<p><span></span><input type="submit" value="提交" id="subbook"></p>
					</form>
				</div>
			  	<h3>修改书籍</h3>
				<div id="alterbook">
					<h4>请输入书籍名称&nbsp;&nbsp;&nbsp;<input type="text" id="bookname" placeholder="请填写尽量具体的名称"/></h4>
					
					<form action = 'alertbook.php' method = 'post' id = "alert_bookinfo" enctype="multipart/form-data">
						<p style="display: none"><span>书id</span><input type="text" name="bookid"></p>
						<p><span>书名</span><input type="text" name="bookname"></p>
						<p><span>作者</span><input type="text" name="authod"></p>
						<p><span>大类型</span><select name="bigtype"><option id="">文学</option><option>诗歌</option><option>外语</option></select></p>
						<p><span>细类型</span><select name="smalltype"><option id="">玄幻</option><option>言情</option><option>恐怖</option></select></p>
						<p><span>出版时间</span><input type="text" name="sheltime" id="sheltime"></p>
						<p><span>出版社</span><input type="text" name="press"></p>
						<p><span>数量</span><input type="text" name="amount"></p>
						<p><span>图片</span><input type="file" name="bookimg"></p>
						<p><span>价格</span><input type="text" name="price"></p>
						<p><span>折扣</span><input type="text" name="discount" placeholder="请填写0.1到1之间的数"></p>
						<p><span>简介</span><textarea rows="3" cols="60" style="resize: none" name="intro"></textarea></p>
						<p><span></span><input type="submit" value="确认修改" id="realalter">&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="取消修改" id="cancelalter"></p>
					</form>
				</div>
			  	<h3>删除书籍</h3>
				<div id="delbook">
					<div id="delebook">
						<h4>请输入书籍名称&nbsp;&nbsp;&nbsp;<input type="text" id="delbookname" placeholder="请填写尽量具体的名称"/></h4>
					</div>
					<table>
						<tr>
							<th>图书id</th><th>书名</th><th>作者</th><th>出版社</th><th>出版时间</th><th>价格</th><th>折扣</th><th>库存</th><th><input type="checkbox" name="seleall"></th>
						</tr>
						<tr>
							<td>图书id</td><td>书名</td><td>作者</td><td>出版社</td><td>出版时间</td><td>价格</td><td>折扣</td><td>库存</td><td><input type="checkbox" name="del[]"></td>
						</tr>
					</table>
					<br/><br/><br/><br/><br/><br/><br/>
				</div>
			  	<h3>查看书籍</h3>
				<div id="querybook">
					<br/><br/><br/><br/><br/><br/><br/>
				</div>
		  </div>
		  <div id="tabs-2">
		  		<h3>会员信息管理</h3>
				<div id="ma_userinfo">
					<br/><br/><br/><br/><br/><br/><br/>
				</div>
			  	<h3>会员留言管理</h3>
				<div id="ma_usermessa">
					<br/><br/><br/><br/><br/><br/><br/>
				</div>
			  	
		  </div>
		  <div id="tabs-3">
		  		<h3>订单编辑</h3>
				<div id="editorder">
					<br/><br/><br/><br/><br/><br/><br/>
				</div>
			  	<h3>订单查询</h3>
				<div id="queryorder">
					<br/><br/><br/><br/><br/><br/><br/>
				</div>
		  </div>
		  <div id="tabs-4">
		  		<h3>书店公告</h3>
				<div id="announce">
					<br/><br/><br/><br/><br/><br/><br/>
				</div>
			  	<h3>精心推荐</h3>
				<div id="recommend">
					<br/><br/><br/><br/><br/><br/><br/>
				</div>
			  	<h3>本期专题</h3>
				<div id="project">
					<br/><br/><br/><br/><br/><br/><br/>
				</div>
		  </div>
		  <div id="tabs-5">
		  		<h3>图片轮播1</h3>
				<div id="shuffles1">
					<br/><br/><br/><br/><br/><br/><br/>
				</div>
			  	<h3>图片轮播2</h3>
				<div id="shuffles2">
					<br/><br/><br/><br/><br/><br/><br/>
				</div>
		  </div>
		  <div id="tabs-6">
		  		<h3>本周新书</h3>
				<div id="newbook">
					<br/><br/><br/><br/><br/><br/><br/>
				</div>
			  	<h3>畅销推荐</h3>
				<div id="realreco">
					<br/><br/><br/><br/><br/><br/><br/>
				</div>
			  	<h3>限时优惠</h3>
				<div id="limitfree">
					<br/><br/><br/><br/><br/><br/><br/>
				</div>
			  	<h3>免费图书</h3>
				<div id="freebook">
					<br/><br/><br/><br/><br/><br/><br/>
				</div>
			  	<h3>有声读物</h3>
				<div id="voicebook">
					<br/><br/><br/><br/><br/><br/><br/>
				</div>
		  </div>
		  <div id="tabs-7">
		  		<h3>文学艺术</h3>
				<div id="wenxueyishu">
					<br/><br/><br/><br/><br/><br/><br/>
				</div>
			  	<h3>人文社科</h3>
				<div id="renwensheke">
					<br/><br/><br/><br/><br/><br/><br/>
				</div>
			  	<h3>经管励志</h3>
				<div id="jingguanglizhi">
					<br/><br/><br/><br/><br/><br/><br/>
				</div>
			  	<h3>健康生活</h3>
				<div id="jiankangshenhuo">
					<br/><br/><br/><br/><br/><br/><br/>
				</div>
		  </div>
		</div>
	</div>
	<!--对话框-->
	<div id="addbookdialog"><h5> (｡◕ˇ∀ˇ◕）努力添加中...</h5></div>
	<div id="alterbookdialog"><h5> (｡◕ˇ∀ˇ◕）努力修改中...</h5></div>
	
</div>
</body>
</html>