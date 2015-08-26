  <!-- 用护栏 -->
	<div class="userbardiv">
		<span class="loginOrRegister">
			欢迎光临千百度&nbsp;<a class="login" href="javascript:void(0)" title = "登录吧亲">登录</a>&nbsp;<a class="register" href="javascript:void(0)" title = "注册免费哦">免费注册</a>
			<a href="javascript:void(0)" class="member">用户</a>&nbsp;<a href="javascript:void(0)" class="logout">退出</a>
		</span>
		
		<ul class="userbarright">
			<li id="header_shopcar">购物车</li>
			<li id="header_order">我的订单</li>
			<li>电子书架</li>
			<li>手机千百度</li>
			<li class="drop-downshoujiqianbaidu"onmouseover="mybookingshow()"onmouseout = "mybookinghidden()">我的千百度↓</li>
			<li onmouseover="customerserviceshow()"onmouseout = "customerservicehidden()"><a href="#">客户服务↓</li>
			<li onmouseover = "showshopinfo(1)" onmouseout = "showshopinfo(0)"><a href="#">商店介绍↓</li>
		</ul>
	
	</div>
	<ul class="showhidden position1" onmouseover="mybookingshow()"onmouseout = "mybookinghidden()">
		<li><a href="#">我的千积分</a></li>
		<li><a href="#">我的收藏</a></li>
		<li><a href="#">我的评论</a></li>
		<li><a href="#">我的余额</a></li>
	</ul>
	<ul class="showhidden position2" onmouseover="customerserviceshow()"onmouseout = "customerservicehidden()">
		<li><a href="#">帮助中心</a></li>
		<li><a href="#">联系客服</a></li>
		<li><a href="#">我要投诉</a></li>
		<li><a href="#">意见建议</a></li>
	</ul>
	<div class = "shopinformation">
		书店介绍：全世界图书销量版排行（你猜）<br/>
		书店地址：仲恺农业工程学院<br/>
		书店联系电话：0214-458974555<br/>
		书友交流qq群：456923115;
	</div>
	<div class = "userbarimg">
	</div>
	<div style="height:40px"> </div>
	<script type="text/javascript">
		function mybookingshow(){
		        oUlNode = document.getElementsByClassName("showhidden")[0];
			    oUlNode.style.visibility = "visible"; 
		}
		function mybookinghidden(){
			 oUlNode = document.getElementsByClassName("showhidden")[0];
			 oUlNode.style.visibility = "hidden"; 
		}
		function customerserviceshow(){
			 oUlNode = document.getElementsByClassName("showhidden")[1];
			 oUlNode.style.visibility = "visible"; 
		}
		function customerservicehidden(){
			 oUlNode = document.getElementsByClassName("showhidden")[1];
			 oUlNode.style.visibility = "hidden"; 
		}
		function showshopinfo(a){
			oDivNode = document.getElementsByClassName("shopinformation")[0];
			a==1? value="visible":value="hidden";
			oDivNode.style.visibility = value;
		}
		
		$(function(){
			$('.searchbuttonsou').click(function(){
				//alert(trim($('.searchtext').val()).length);
				if(!trim($('.searchtext').val())){
					alert('输入不能为空');
				}else{
					$('#searchit').submit();
				}
			});
		});
	</script>
	<!-- 用户栏结束 -->
	<!-- 搜索栏   -->
	<div class="searchbar">
		<img src="http://img1.3lian.com/gif/more/18/2012/04/7d074ae09c64da3de4ab7d4a6130c433.png"/>
		<form id="searchit" method="get" action="search.php">
			<input class="searchtext" type = 'text' name="bookname"/>
			<input type = "button" value = "全部分类" class="searchbuttontype" onmouseover="showbooktype()" onmouseout = "hiddenboooktype()" title = "点击看看亲" />
			<input class = "searchbuttonsou" type = "button" value = "搜搜看"/>
		</form>
	</div>
	<!-- 隐藏的ul -->
	<ul class="showsearchul"onmouseover="showbooktype()" onmouseout = "hiddenboooktype()">
		<li><a href="#" onclick = 'gettype(this)'>全部分类</a></li>
		<li><a href="#" onclick = 'gettype(this)'>青春励志</a></li>
		<li><a href="#" onclick = 'gettype(this)'>搞笑轻松</a></li>
		<li><a href="#" onclick = 'gettype(this)'>著名文学</a></li>
		<li><a href="#" onclick = 'gettype(this)'>外语读物</a></li>
		<li><a href="#" onclick = 'gettype(this)'>动漫读物</a></li>
		<li><a href="#" onclick = 'gettype(this)'>哲学相关</a></li>
		<li><a href="#" onclick = 'gettype(this)'>科学技术</a></li>
	</ul>
	<script type="text/javascript">
		hiddenboooktype();
		function showbooktype(){
			oUlNode = document.getElementsByClassName("showsearchul")[0];
			oUlNode.style.visibility = "visible";
		}
		function hiddenboooktype(){
			oUlNode = document.getElementsByClassName("showsearchul")[0];
			oUlNode.style.visibility = "hidden";
		}
		function gettype(node){
			oUlNode = document.getElementsByClassName("showsearchul")[0];
			obuttonNode = document.getElementsByClassName("searchbuttontype")[0];
			obuttonNode.value = node.innerHTML;
			oUlNode.style.visibility = "hidden";
		}
	</script>
	<!-- 蓝色的导航栏 -->
	<div class = "navigatetop">
		<ul>
			<li><a href="index.php">图书首页</a></li>
			<li><a href="#">音像</a></li>
			<li><a href="#">杂志/期刊</a></li>
			<li><a href="#">少儿</a></li>
			<li><a href="#">文学</a></li>
			<li><a href="#">历史</a></li>
			<li><a href="#">外语</a></li>
			<li><a href="#">IT互联网</a></li>
		</ul>
	</div>