/**
 * @author lujialu
 */
	//展示分页
	function showbooks(phpfile,pagenum){
	$('#search-result').html('');
		var html = '';
		$.ajax({
			url:phpfile,
			type:'get',
			data:{
				page:pagenum,
				booktype:$('#gettype').html(),
				smalltype:$('#getsmalltype').html(),
				authod:$('#getauthod').html(),
				press:$('#getpress').html(),
				multitypes:$('#getmultitypes').html(),
				bookname:$('#getbookname').html(),
			},
			success:function(response,status,xhr){
				var json = $.parseJSON(response);
				$.each(json,function(key,value){
					var havegoods = '';
					if(value.book_amount!=0){
						havegoods = '有货';
					}else{
						havegoods = '无货';
					}
					var nowprice =(value.book_oriprice*value.book_discount).toFixed(2);
					html+='<div><img src="'+value.book_img_address+'" style="width:160px;height:160px;" alt="图片"/><div><h3><a name = "'+value.book_id+'"href="book.php?id='+value.book_id+'">'+
					value.book_name+'</a></h3><p><a href="book.php?id='+value.book_id+'">(948条评论)</a>作者：<a href="search.php?authod='+value.book_authod+'">'+
					value.book_authod+'&nbsp;&nbsp;</a>/'+value.book_sheltime+'/ 出版社： <a href="search.php?press='+value.book_press+'">'+
					value.book_press+'</a></p><p>'+
					value.book_Introduction+'</p><span class="hasgoods"><input type="button" value="加入购物车" class="addtoshopcar"/>&nbsp;&nbsp;&nbsp;<span class="ishasgoods">'+
					havegoods+'</span><span class="ori_price">原价￥'+
					value.book_oriprice+' </span> <span class="now_price">现价￥'+
					nowprice+' </span></span></div></div>';
				});
				if(html==""){
					html = '<h2 style=\'color:#666;height:50px;line-height:50px;text-align:center;\'>〒_〒抱歉，没有搜到相关信息</h2>';
					$('#fenye').hide();
				}
				$('#search-result').append(html);
				var num = json.length;
				$('#search-right').height(num*230+120);
				$('#search-result').height(num*230);
			},
		});
}

//打开登陆框
function hasnotlog(){
	$('#error').dialog('open');
	setTimeout(function(){
		$('#error').dialog('close');
		$('#login').dialog('open');
	},1000);
}

//购物车没有书时
function shopcarnobook(){
		if($('#shopcar_list li').html()==undefined){
			$('#shopcar_list').html('<h2><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(｡◕ฺˇε ˇ◕ฺ｡）亲，您的购物车还没有图书呢，请返回主页购书吧！！<br/><br/><br/><br/></h2>');
			$('#shopcar_count').hide();
		}
	}

//点击购物车
function clickshopcar(){
	$('#header_shopcar').click(function(){
		if($.cookie('user')){
			window.location.href = 'shopcar.php';
		}else{
			hasnotlog();
		}
	});
}

//点击我的订单
function clickorder(){
	$('#header_order').click(function(){
		if($.cookie('user')){
			window.location.href = 'order.php';
		}else{
			hasnotlog();
		}
	});
}

//删除左右两端的空格
function trim(str){ 
　　    return str.replace(/(^\s*)|(\s*$)/g, "");
}



	