<?php
	if(!isset($_COOKIE['user'])||!isset($_POST)){
		header('Location:index.php');
		exit();
	}
	session_start();
	$_SESSION['bookitems'] = $_POST['bookitems'];
	//print_r($_SESSION['bookitems'] );
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>千百度网上书店--确认订单</title>
<script type="text/javascript"src="js/jquery.js"> </script>
<script type="text/javascript"src="js/jquery.validate.js"> </script>
<script type="text/javascript"src="js/jquery.form.js"> </script>
<script type="text/javascript"src="js/jquery.ui.js"> </script>
<script type="text/javascript"src="js/reg.js"> </script>
<script type="text/javascript"src="js/jquery.cookie.js"> </script>
<script type="text/javascript"src="js/func.js"> </script>
<script type="text/javascript"src="js/order.js"> </script>


<link rel="shortcut icon" type="image/x-icon" href="image/11.ico" />
<link href="css/style.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="smoothness/jquery.ui.css" />
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/reg.css">
<link rel="stylesheet" type="text/css" href="css/order.css">
</head>
<body>
	<?php
		require 'php/header.php';
	?>
	
	<div id="order_main">
		<h2>订单信息</h2>
		<h3>请填写并核对订单信息</h3>
		<div id="order_info">
			<h4>收货人信息<span id="addnewaddress">新增收货地址</span></h4>
			<div id="order_address">
				<h5>
					<!-- <ul>
						<li>默认地址</li>
						<li>卢加禄</li>
						<li>广东</li>
						<li>钟落潭镇光新路388号</li>
						<li>13751878554</li>
						<span>编辑</span>
						<span>删除</span>
					</ul> -->
				</h5>
				<div id="order_other_address">
					<!-- <ul>
						<li>其他地址</li>
						<li>卢加禄1</li>
						<li>广东</li>
						<li>钟落潭镇光新路388号</li>
						<li>13751878554</li>
						<span>编辑</span>
						<span>删除</span>
					</ul> -->
					<!-- <ul>
						<li>其他地址</li>
						<li>卢加禄2</li>
						<li>广东</li>
						<li>钟落潭镇光新路388号</li>
						<li>13751878554</li>
						<span>编辑</span>
						<span>删除</span>
					</ul> -->
					<!-- <ul>
						<li>其他地址</li>
						<li>卢加禄3</li>
						<li>广东</li>
						<li>钟落潭镇光新路388号</li>
						<li>13751878554</li>
						<span>编辑</span>
						<span>删除</span>
					</ul> -->
				</div>
				<span id="packup">收起地址↑</span>
			</div>
		</div>
		
		<div id="order_payway">
			<h4>支付方式</h4>
			<span><label for='payway'><input type='radio' name = 'payway' id="payway" value="0"/>货到付款</label></span>
			<span><label for='payway2'><input type='radio' name = 'payway' id="payway2" checked="checked" value="1"/>在线支付</label></span>
			<span><label for='payway3'><input type='radio' name = 'payway' id="payway3" value="2"/>邮局汇款</label></span>
		</div>
		
		<div id="order_deliver">
			<h4>快递方式</h4>
			<p>本店统一使用<span>申通快递</span>如不支持，请勿拍！</p>
		</div>
		
		<div id="order_list">
			<h4>送货清单</h4>
				<ul id="order_goods">
					<?php
						require 'php/mysql.php';
						$totalmoney = 0;
						$goodlink = new MyDB();
						$goodlink->GetConn();
						foreach ($_POST['bookitems'] as $value) {
							$goodquery = "select * from book,shopcar where shopcar_book_id = book_id and shopcar_id = '$value'";
							$goodresult = $goodlink->getData($goodquery);
							while(!!$rows=mysqli_fetch_assoc($goodresult)) {
								$nowprice = $rows['book_oriprice']*$rows['book_discount'];
								echo '<li>';
									echo '<ul class="one_goods">';
										echo "<li class='getbookid' style='display:none'>{$rows['book_id']}</li>";
										echo "<li><img alt='图片' src='{$rows['book_img_address']}'/></li>";
										echo "<li>{$rows['book_name']}</li>";
										echo "<li>￥$nowprice</li>";
										echo "<li class='getnum'>x{$rows['shopcar_booknum']}</li>";
										if($rows['book_amount']>=$rows['shopcar_booknum']){
											echo "<li>有货</li>";
										}else{
											echo "<li>无货</li>";
										}
									echo '</ul>';
								echo '</li>';
								$totalmoney+=$rows['shopcar_booknum']*$nowprice;
							}
							
						}
						
					?>
					<!-- <li>
						<ul class="one_goods">
							<li><img alt='图片' src="http://image1.suning.cn/content/catentries/00000000010485/000000000104852073/000000000104852073_ls1.jpg"/></li>
							<li>从你的全世界路过 : 让所有人心动的故事</li>
							<li>￥30.00</li>
							<li>x2</li>
							<li>有货</li>
						</ul>
					</li> -->
					<!-- <li>
						<ul class="one_goods">
							<li><img alt='图片' src="http://image1.suning.cn/content/catentries/00000000010485/000000000104852073/000000000104852073_ls1.jpg"/></li>
							<li>从你的全世界路过</li>
							<li>￥30.00</li>
							<li>x2</li>
							<li>有货</li>
						</ul>
					</li> -->
			    </ul>
		</div>
		
		<div id="order_bill">
			<h4>发票信息</h4>
			<p>普通发票（电子）   个人     明细 <span id="modify">修改</span></p>
		</div>
		
		<div id="totalpay">
			<p><span id="commitorder">提交订单</span><span id="paymoney">￥<?php echo $totalmoney;?></span><span id="payment">应付总额：</span></p>
		</div>
		
		
		<!--点击弹出修改地址-->
		<div id="addaddress">
			<div id="newadd">
				<h4>新增收货人信息<span id="closedialog">关闭</span></h4>
				<form>
					<p><span class="rightalign"><span class="smallstar">*</span> 收货人：</span><input type="text" name="receiver" id="receiver"/><span class="errortip">请填写正确信息</span></p>
					<p><span class="rightalign"><span class="smallstar">*</span> 所在地区：</span><input type="text" name="area" id="area" placeholder="请填写所在的省和市，有区可具体到区"/><span class="errortip">请填写正确信息</span></p>
					<p><span class="rightalign"><span class="smallstar">*</span> 详细地址：</span><input type="text" name="fulladdress" id="fulladdress"/><span class="errortip">请填写正确信息</span></p>
					<p><span class="rightalign"><span class="smallstar">*</span> 手机号码：</span><input type="text" name="telphone" id="telphone" placeholder="可写固定电话"/><span class="errortip">请填写正确信息</span></p>
					<p><span class="rightalign"><span class="smallstar">*</span> 邮箱：</span></span><input type="text" name="mail" id="mail" placeholder="用来接收订单提醒邮件"/><span class="errortip">请填写正确信息</span></p>
					<p><span class="rightalign"></span><span id="save">保存收货人信息</span></p>
				</form>
			</div>
		</div>
	</div>
	
	<!--点击弹出输入地址中-->
		<div id="gettingadd">
			<p style="padding-left: 20px">b（￣▽￣）d录入地址中...</p>
		</div>
		<div id="submitorder">
			<p style="padding-left: 20px">b（￣▽￣）d提交订单中...</p>
		</div>
	<?php
		require 'php/footer.php';
	?>
	
	
</body>
</html>