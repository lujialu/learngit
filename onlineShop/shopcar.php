<?php
	if(!isset($_COOKIE['user'])){
		header('Location:index.php');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>千百度网上书店--购物车</title>
<script type="text/javascript"src="js/jquery.js"> </script>
<script type="text/javascript"src="js/jquery.validate.js"> </script>
<script type="text/javascript"src="js/jquery.form.js"> </script>
<script type="text/javascript"src="js/jquery.ui.js"> </script>
<script type="text/javascript"src="js/reg.js"> </script>
<script type="text/javascript"src="js/jquery.cookie.js"> </script>
<script type="text/javascript"src="js/func.js"> </script>
<script type="text/javascript"src="js/shopcar.js"> </script>


<link rel="shortcut icon" type="image/x-icon" href="image/11.ico" />
<link href="css/style.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="smoothness/jquery.ui.css" />
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/reg.css">
<link rel="stylesheet" type="text/css" href="css/shopcar.css">
</head>
<body>
	<?php
		require 'php/header.php';
	?>
	<div id="shopcar_main">
		<ul id="shopcar_list">
			<form action="order.php" method="post">
				<?php
					require 'php/mysql.php';
					$shopcarlink = new MyDB();
					$shopcarlink->GetConn();
					$shopcarquery = "select * from shopcar , book where shopcar.shopcar_book_id = book.book_id and shopcar.shopcar_user = '{$_COOKIE['user']}'";
					$shopcarresult = $shopcarlink->GetData($shopcarquery);
					while(!!$shopcarrows = mysqli_fetch_assoc($shopcarresult)){
						$nowprice = $shopcarrows['book_oriprice']*$shopcarrows['book_discount'];
						 echo "<p style = 'display:none'>{$shopcarrows['shopcar_id']}</p>";
						 echo "<p style = 'display:none'>{$shopcarrows['book_id']}</p>";
						 echo "<li>";
						 echo "<div><input type='checkbox' name='bookitems[]' class = 'bookitems' value='{$shopcarrows['shopcar_id']}'/></div>";
						 echo "<div class='shopcar_img' style='padding-top:0;border: none'><img alt='图片' src='{$shopcarrows['book_img_address']}'style='width:100px;height:100px;'></div>";
						 echo "<div>{$shopcarrows['book_name']}</div>";
						 echo "<div>原价:￥{$shopcarrows['book_oriprice']}</div>";
						 echo "<div>现价:￥ <span class='nowprice'>$nowprice</span> </div>";
						 echo "<div><span><span class='shopcar_changnum'>-</span><input class='shopcar_num' type='text' name='booknum' value = '{$shopcarrows['shopcar_booknum']}' /><span class='shopcar_changnum'>+</span></span><br/><br/><input type='button' value='删除' class='delbook'></div>";
						 echo '</li>';
					}
				?>
				
				
		    </ul>
		    <p id="shopcar_count"><input type="checkbox" id="selectall"/>全选<span id="deleall">删除</span><span id='total'>合计:￥0</span><span id="paymonney"><input type="submit" value="结算"/></span></p>
		</form>
	</div>
	<?php
		require 'php/footer.php';
	?>
</body>
</html>