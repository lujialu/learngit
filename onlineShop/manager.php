<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<style type="text/css">
*{
	margin:0;
	padding:0;
	list-style-type: none;
}
table{
	margin:17px;
	width:620px;
	border-collapse: collapse;
	border:1px solid #000;
}
th,td{
	border:1px solid #000;
	text-align: center;
	height:60px;
	
}
th{
	background-color: blue;
	color:white;
	cursor:pointer;
}
.pagediv{
	width:900px;
	height:1300px;
	border:1px solid #000;
	margin:auto;
}
.topdiv{
	width:890px;
	height:150px;
	border:1px solid #000;
	margin: auto;
	margin-top:5px;
	background-color: #B4CDE6;
}
.title{
	display:inline-block;
	padding-top:50px;
	padding-left:120px;
	font-size:30px;
	color:blue;
}
.username{
	display:inline-block;
	color:blue;
	font-size:20px;
	position:relative;
	top:50px;
	left:90px;
}
a{
	text-decoration: none;
}
a:hover{
	color:red;
}
.leftdiv{
	margin:5px;
	float:left;
	border:1px solid #000;
	width:200px;
	height:800px;
	background-color: #B4CDE6;
}
.rightdiv{
	margin:5px;
	float:left;
	border:1px solid #000;
	width:676px;
	height:800px;
	overflow:hidden;
	background-color:#B4CDE6;
}
.leftdiv span{
	display:block;
	text-align: center;
	margin-top:10px;
	font-weight: bold;
	font-size:19px;
}
.leftdiv ul{
	padding-left:50px;
	margin-top:20px;
}
.leftdiv li{
	line-height: 50px;
	font-size:16px;
	
}
li a{
	color:#000;
}
.div1{
	width:670px;
	height:800px;	
	overflow:hidden;
	
}
.div2{
	width:670px;
	height:800px;
	overflow:hidden;
}
.div3{
	width:670px;
	height:800px;
	overflow:hidden;
}
.div4{
	width:670px;
	height:800px;
	overflow:hidden;
}
.div4 p{
	margin:10px 0 10px 5px;
}
.tianjia{
	margin-left:100px;
}
.xiangxishuoming{
	display:inline-block;
	position:relative;
	bottom:60px;
}
.div5{
	width:670px;
	height:800px;
	overflow:hidden;
}
.div6{
	width:670px;
	height:800px;
	overflow:hidden;
}
.div7{
	width:670px;
	height:800px;
	overflow:hidden;
}
.div8{
	width:670px;
	height:800px;
	overflow:hidden;
}
.div9{
	width:670px;
	height:800px;
	overflow:hidden;
}
h2{
	margin:20px;
	text-align:center;
}


</style>
<script type = "text/javascript" src = "jquery-1.11.3.js"> </script>
<script type = "text/javascript">
	$(function(){
		$('li').get(0).onclick = function(){
			//$('.div1').css('background-color','pink');
			$('.div1').css('height','800px');
			$('.div2').css('height','0px');
			$('.div3').css('height','0px');
			$('.div4').css('height','0px');
			$('.div5').css('height','0px');
			$('.div6').css('height','0px');
			$('.div7').css('height','0px');
			$('.div8').css('height','0px');
			$('.div9').css('height','0px');
		};
		$('li').get(1).onclick = function(){
			$('.div1').css('height','0px');
			$('.div2').css('height','800px');
			$('.div3').css('height','0px');
			$('.div4').css('height','0px');
			$('.div5').css('height','0px');
			$('.div6').css('height','0px');
			$('.div7').css('height','0px');
			$('.div8').css('height','0px');
			$('.div9').css('height','0px');
		};
		$('li').get(2).onclick = function(){
			$('.div1').css('height','0px');
			$('.div2').css('height','0px');
			$('.div3').css('height','800px');
			$('.div4').css('height','0px');
			$('.div5').css('height','0px');
			$('.div6').css('height','0px');
			$('.div7').css('height','0px');
			$('.div8').css('height','0px');
			$('.div9').css('height','0px');
		};
		$('li').get(3).onclick = function(){
			$('.div1').css('height','0px');
			$('.div2').css('height','0px');
			$('.div3').css('height','0px');
			$('.div4').css('height','800px');
			$('.div5').css('height','0px');
			$('.div6').css('height','0px');
			$('.div7').css('height','0px');
			$('.div8').css('height','0px');
			$('.div9').css('height','0px');
		};
		$('li').get(4).onclick = function(){
			$('.div1').css('height','0px');
			$('.div2').css('height','0px');
			$('.div3').css('height','0px');
			$('.div4').css('height','0px');
			$('.div5').css('height','800px');
			$('.div6').css('height','0px');
			$('.div7').css('height','0px');
			$('.div8').css('height','0px');
			$('.div9').css('height','0px');
		};
		$('li').get(5).onclick = function(){
			$('.div1').css('height','0px');
			$('.div2').css('height','0px');
			$('.div3').css('height','0px');
			$('.div4').css('height','0px');
			$('.div5').css('height','0px');
			$('.div6').css('height','800px');
			$('.div7').css('height','0px');
			$('.div8').css('height','0px');
			$('.div9').css('height','0px');
		};
		$('li').get(6).onclick = function(){
			$('.div1').css('height','0px');
			$('.div2').css('height','0px');
			$('.div3').css('height','0px');
			$('.div4').css('height','0px');
			$('.div5').css('height','0px');
			$('.div6').css('height','0px');
			$('.div7').css('height','800px');
			$('.div8').css('height','0px');
			$('.div9').css('height','0px');
		};
		$('li').get(7).onclick = function(){
			$('.div1').css('height','0px');
			$('.div2').css('height','0px');
			$('.div3').css('height','0px');
			$('.div4').css('height','0px');
			$('.div5').css('height','0px');
			$('.div6').css('height','0px');
			$('.div7').css('height','0px');
			$('.div8').css('height','800px');
			$('.div9').css('height','0px');
		};
		$('li').get(8).onclick = function(){
			$('.div1').css('height','0px');
			$('.div2').css('height','0px');
			$('.div3').css('height','0px');
			$('.div4').css('height','0px');
			$('.div5').css('height','0px');
			$('.div6').css('height','0px');
			$('.div7').css('height','0px');
			$('.div8').css('height','0px');
			$('.div9').css('height','800px');
		};
	});
</script>
</head>
<body>
<div class="pagediv">
	<div class="topdiv">
		<span class = "title">千百度网上书店管理端</span>
		<span class = "username">用户名：***   &nbsp;&nbsp;&nbsp;&nbsp;<a href = "#">注销</a></span>
	</div>
	<div class = "leftdiv">
		<span>任务列表</span>
		<ul>
		<li><a href = "javascript:void(0)">查看用户信息</a></li>
		<li><a href = "javascript:void(0)">浏览客户信息</a></li>
		<li><a href = "javascript:void(0)">查看客户订单</a></li>
		<li><a href = "javascript:void(0)">添加新书信息</a></li>
		<li><a href = "javascript:void(0)">管理数目类别</a></li>
		<li><a href = "javascript:void(0)">管理存货信息</a></li>
		<li><a href = "javascript:void(0)">查看消息</a></li>
		<li><a href = "javascript:void(0)">修改个人信息</a></li>
		<li><a href = "javascript:void(0)">修改密码</a></li>
		</ul>
	</div>
	<div class = "rightdiv">
		<div class = "div1">
			<h2>查看用户信息</h2>
		</div>
		<div class = "div2">
			<h2>浏览客户信息</h2>
			<table>
				<tr>
					<th>用户名</th>
					<th>用户性别</th>
					<th>用户注册日期</th>
					<th>用户手机号码</th>
					<th>用户地址</th>
					<th>邮政编码</th>
					<th>用户年龄</th>
					<th>用户状态</th>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
			</table>
			
		</div>
		<div class = "div3">
			<h2>查看客户订单</h2>
			<table>
				<tr>
					<th>客户姓名</th>
					<th>书名</th>
					<th>单价</th>
					<th>所需总数</th>
					<th>总金额</th>
					<th>订购时间</th>
					<th>是否发货</th>
					<th>信息</th>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td><input type = "checkbox" name = "" /></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td><input type = "checkbox" name = "" /></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td><input type = "checkbox" name = "" /></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td><input type = "checkbox" name = "" /></td>
					<td>&nbsp;</td>
				</tr>
			</table>
		</div>
		<div class = "div4">
			<h2>添加新书信息</h2>
			<form action="" method ="post">
				<p><span class = "rightalign">选择分类</span>:
					<select name = "booktype">
						<option>文学</option>
						<option>外语</option>
						<option>11</option>
						<option>22</option>
						<option>33</option>
					</select>
				
				小类:
					<select name = "booktype">
						<option>文学理论</option>
						<option>111</option>
						<option>111</option>
						<option>211</option>
						<option>331</option>
					</select>
				</p>
				<p><span class = "rightalign">书名:<input type = "text"/></p>
				<p><span class = "rightalign">作者:<input type = "text"/></p>
				<p><span class = "rightalign">出版社:<input type = "text"/></p>
				<p><span class = "rightalign">出版日期:<input type = "date"/></p>
				<p><span class = "rightalign">价格:&nbsp;市场价:<input type = "text"style = "width:30px"/>
					会员价:<input type = "text"style = "width:30px"/>
					赠送积分:<input type = "text"style = "width:30px"/>
				</p>
				<p><span class = "rightalign">开本:</span><input type = "text"/></p>
				<p><span class = "rightalign">版次:</span><input type = "text"/></p>
				<p><span class = "rightalign">页数:</span><input type = "text"/></p>
				<p><span class = "rightalign">ISBN:</span><input type = "text"/></p>
				<p><span class = "rightalign">商品图片:</span><input type = "file"/><input type = "button" value = "上传"></p>
				<p><span class = "xiangxishuoming">详细说明:</span><textarea rows="5" cols="50"></textarea></p>
				<p><span class = "xiangxishuoming">目录:</span><textarea rows="5" cols="50"></textarea></p>
				<p ><input class = "tianjia" type = "submit" value = "添加"/></p>
			</form>
		</div>
		<div class = "div5">
			<h2>管理数目类别</h2>
		</div>
		<div class = "div6">
			<h2>管理存货信息</h2>
		</div>
		<div class = "div7">
			<h2>查看消息</h2>
		</div>
		<div class = "div8">
			<h2>修改个人信息</h2>
		</div>
		<div class = "div9">
			<h2>修改密码</h2>
		</div>
		
	</div>
</div>

</body>
</html>