<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>千百度网上书店--支付订单</title>
<script type="text/javascript"src="js/jquery.js"> </script>
<script type="text/javascript"src="js/jquery.validate.js"> </script>
<script type="text/javascript"src="js/jquery.form.js"> </script>
<script type="text/javascript"src="js/jquery.ui.js"> </script>
<script type="text/javascript"src="js/reg.js"> </script>
<script type="text/javascript"src="js/jquery.cookie.js"> </script>
<script type="text/javascript"src="js/func.js"> </script>
<script type="text/javascript"src="js/payorder.js"> </script>



<link rel="shortcut icon" type="image/x-icon" href="image/11.ico" />
<link href="css/style.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="smoothness/jquery.ui.css" />
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/reg.css">
<link rel="stylesheet" type="text/css" href="css/payorder.css">
</head>
<body>
	<?php
		require 'php/header.php';
	?>
	
	
	<div id="payorder_main">
		<div id="selectitems">
			<span><input type="radio" name="selectway" value="allselect">全选</span>
			<span><input type="radio" name="selectway" value="allselect">未付款</span>
			<span><input type="radio" name="selectway" value="allselect">已付款</span>
			<span><input type="radio" name="selectway" value="allselect">已付款未收货</span>
			<span><input type="radio" name="selectway" value="allselect">已付款已收货</span>
			<span><input type="radio" name="selectway" value="allselect">已付款已收货未评价</span>
			<span><input type="radio" name="selectway" value="allselect">已付款已收货已评价</span>
		</div>
		<?php
			require 'php/mysql.php';
			$link = new MyDB();
			$link->getConn();
			$query = "select * from bookorder where order_user = '{$_COOKIE['user']}'";
			$result = $link->GetData($query);
			/*while(!!$rows=mysqli_fetch_assoc($result)){
				echo "<div>";
				echo "<h4><span><input type='checkbox' name='orderselect[]' checked></span>&nbsp;&nbsp;&nbsp;<span>2012-5-14</span>&nbsp;&nbsp;&nbsp;订单编号：<span>{$rows['order_id']}</span><span class='ordermoney'>总价：￥141.00</span></h4>";
				echo "<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$rows['order_address']}</h4>";
				echo "<table>";
				$bookarray = array();
				$bookidandnum = $rows['order_book_id'];
				$book = explode(',', $bookidandnum);
				//print_r($book);
				
				foreach ($book as $bookkey => $bookvalue) {
					echo "<tr>";
					$bookvaluearray = explode('|', $bookvalue);
					//print_r($bookvaluearray);
					$bookquery = "select * from book where book_id = '{$bookvaluearray[0]}'";
					$booknum = $bookvaluearray[1];
					$bookresult = $link->GetData($bookquery);
					while(!!$bookrows = mysqli_fetch_assoc($bookresult)){
						$bookprice = round($bookrows['book_oriprice']*$bookrows['book_discount'],2);
						$bookallprice = round($bookprice * $booknum,2); 
						echo "<td><img alt='图片' style='width:100px;height:100px'src='{$bookrows['book_img_address']}'/></td>";
						echo "<td>{$bookrows['book_name']}</td>";
						echo "<td>$bookprice</td>";
					}
					echo "<td>×$booknum</td>";
					echo "<td class = 'orderallprice'>￥$bookallprice</td>";
					echo "</tr>";
				}
				echo "</table>";
				echo "</div>";
				 * 
				 
			}*/
		?>
		<div>
			<h4><span><input type="checkbox" name="orderselect[]"></span>&nbsp;&nbsp;&nbsp;<span>2012-5-14</span>&nbsp;&nbsp;&nbsp;订单编号：<span>102154515232</span><span class="ordermoney">总价：￥141.00</span></h4>
			<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;卢加禄,广东省广州市海珠区,仲恺农业工程学院,13751878554<span>状态:未支付</span></h4>
			<table>
				<tr>
					<td><img alt="图片" style='width:100px;height:100px'src="http://image1.suning.cn/content/catentries/00000000010485/000000000104852073/000000000104852073_ls1.jpg"/></td>
					<td>从你的全世界路过 : 让所有人心动的故事</td>
					<td>￥30.50</td>
					<td>×2</td>
					<td>￥71.00</td>
				</tr>
				<tr>
					<td><img alt="图片" style='width:100px;height:100px'src="http://image1.suning.cn/content/catentries/00000000010485/000000000104852073/000000000104852073_ls1.jpg"/></td>
					<td>从你的全世界路过 : 让所有人心动的故事</td>
					<td>￥30.50</td>
					<td>×2</td>
					<td>￥71.00</td>
				</tr>
			</table>
		</div>
		<h3><span class="rightalign"><span>总价:</span><span class="allmoney">￥142.00</span><input type="button" value="确认付款" id="confirmpay"/></span></h3>
	</div>
	
	<?php
		require 'php/footer.php';
	?>
</body>
</html>