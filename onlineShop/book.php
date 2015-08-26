<?php 
	if(!isset($_GET['id'])){
		header('Location:index.php');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>千百度网上书店--图书</title>
<script type="text/javascript"src="js/jquery.js"> </script>
<script type="text/javascript"src="js/jquery.validate.js"> </script>
<script type="text/javascript"src="js/jquery.form.js"> </script>
<script type="text/javascript"src="js/jquery.ui.js"> </script>
<script type="text/javascript"src="js/reg.js"> </script>
<script type="text/javascript"src="js/jquery.cookie.js"> </script>
<script type="text/javascript"src="js/func.js"> </script>
<script type="text/javascript"src="js/book.js"> </script>


<link rel="shortcut icon" type="image/x-icon" href="image/11.ico" />
<link href="css/style.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="smoothness/jquery.ui.css" />
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/reg.css">
<link rel="stylesheet" type="text/css" href="css/book.css">
</head>
<body>
	<?php
		require 'php/header.php';
	?>
	<div id="book_main">
		<div id="book_content">
			<?php
				require 'php/mysql.php';
				$link = new MyDB();
				$link->getConn();
				$query = "select * from book where book_id ='{$_GET['id']}'";
				$result = $link->GetData($query);
				$row = mysqli_fetch_assoc($result);
				echo '<img src="'.$row['book_img_address'].'"alt="图片" style = "width:250px;height:250px"/>';
			?>
			
			<div>
				<h2><?php echo $row['book_name']?></h2>
				<div>
					<p><span class="alignright">原&nbsp;&nbsp;价</span>&nbsp;&nbsp;&nbsp;&nbsp;￥<span class="money"><?php echo number_format($row['book_oriprice'], 2, '.', '');?></span></p>
					<p><span class="alignright">现&nbsp;&nbsp;价</span>&nbsp;&nbsp;&nbsp;&nbsp;￥<span class="money"><?php echo number_format($row['book_oriprice']*$row['book_discount'],2, '.', '')?></span>&nbsp;&nbsp;&nbsp;<span style="color:red;font-weight: normal">(<?php echo ($row['book_discount']*10)?>折)</span></p>
					<p><span class="alignright">作&nbsp;&nbsp;者</span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['book_authod']?></p>
					<p><span class="alignright">出版社</span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['book_press']?></p>
					<p><span class="alignright">出版时间</span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['book_sheltime']?></p>
					<p><span class="alignright">购买数量</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="changnum">-</span></span><input type="text" name="booknum" id = "booknum"value = '1' /><span class="changnum">+</span></p>
					<p><span class="alignright"></span>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="加入购物车" id="addshopcar" style="width:100px;height: 30px"/><p>
				</div>
			</div>
			
			
		</div>
		
		
		<div id="book_info">
			<div id = 'book_tabs'>
				<ul>
					<li><a href="#book_tabs1">书本详情</a></li>
					<li><a href="#book_tabs2">书友评论(100)</a></li>
					<li><a href="#book_tabs3">售后保障</a></li>
					
				</ul>
				<!--图书详情-->
				<div id="book_tabs1">
					<p>时间有限，此模块更新中，敬请期待！~</p>
					<img src="image/pinkflower.png"alt="图片"/>
				</div>
				<!--图书评论-->
				<div id="book_tabs2">
					<!--评论的数据库操作-->
					<?php
						echo "<p class = 'getbookid' style = 'display:none'>{$_GET['id']}</p>";
						$conn = new MyDB();
						$conn->getConn();
						$query2 = "select * from comment where comment_book_id ='{$_GET['id']}' order by comment_praise DESC";
						$result2 = $link->GetData($query2);
						while(!!$row2 = mysqli_fetch_assoc($result2)){
							echo '<div class="book_comment">';
							echo "<h3>{$row2['comment_user']}</h3>";
							echo "<p class = 'getid' style = 'display:none'>{$row2['comment_id']}</p>";
							echo "<p>{$row2['comment_content']}</p>";
							echo "<p>{$row2['comment_time']}<span class = 'praise'>有用({$row2['comment_praise']})</span></p>";
							echo '</div>';
						}
					?>
					
					
				</div>
				<!--售后服务-->
				<div id="book_tabs3">
					<h3>售后服务</h3>
					<p>质量问题十五天内可退换</p>
					<h3>退货流程</h3>
					<p>请联系商家 电话：0880-89445637</p>
					<h3>温馨提示</h3>
					<p>亲爱的顾客，为保障您的权益，请您对配送商品查验确认合格后签收，如有问题，请及时与商家联系。如需退货，请将包装一并寄回哦。</p>
					<h3>特别声明</h3>
					<p>本站商品信息均来自于苏宁云台商家，其真实性、准确性和合法性由信息发布者（商家）负责。本站不提供任何保证，并不承担任何法律责任。因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本站不能确保客户收到的货物与网站图片、产地、附件说明完全一致，网站商品的功能参数仅供参考，请以实物为准。若本站没有及时更新，请您谅解！</p>
					<h3>全民福利</h3>
					<p>即日起，在本店购满1000元以上的书友，可以获得郭玉宁大作家的亲笔签名照一张，机不可失，时不再来，还等什么！！！</p>
				</div>
					
				</div>
			</div>
		</div>
	</div>
	
	<?php
		require 'php/footer.php';
	?>
	<div id="sucadd">
		<h3>(～￣▽￣)～ 正在加入购物车...</h3>
	</div>
</body>
</html>