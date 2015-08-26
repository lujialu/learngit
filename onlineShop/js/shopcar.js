/**
 * @author lujialu
 */
$(function(){
	//将滚动条放置到指定位置
	window.scrollTo(0,200);		
	
	//如果购物车里没书
	shopcarnobook();
	//点击购物车
	clickshopcar();
	//点击我的订单
	clickorder();
	
	//合计money
	function totalmoney(){
		window.total = 0;
		$.each($('input[class=bookitems]:checked'),function(){
			window.total;
			var price = Number($(this).parent().parent().find('.nowprice').html());
			var num = Number($(this).parent().parent().find('.shopcar_num').val());
			window.total += price*num;
		});
		
		$('#total').html('合计:￥'+window.total.toFixed(2));
	}
	
	//点击复选框
	$.each($('input[class=bookitems]'),function(){
			$(this).click(function(){
				totalmoney();
			});
		});
	
	
	//购物车的数量约束
	//改变文本框内容时传输数据到数据库
	function ajaxsendbooknum(_bookid,_booknum){
		$.ajax({
			url:'php/changenum.php',
			type:'post',
			data:{
				bookid:_bookid,
				booknum:_booknum,
			},
		});
	}
	//按下-号键
	$('#shopcar_list').on('click','.shopcar_changnum:first-child',function(){
		var val = $(this).next().val();
		if(!isNaN(val)&&val>=2){
			val = Math.floor(val);
			val--;
			$(this).next().val(val);
		}else{
			$(this).next().val(1);
		}
		_bookid = $(this).parent().parent().parent().prev().html();
		_booknum = $(this).next().val();
		ajaxsendbooknum(_bookid,_booknum);
		totalmoney();
	});
	
	//按下+号键
	$('#shopcar_list').on('click','.shopcar_changnum:last-child',function(){
		var val = $(this).prev().val();
		if(!isNaN(val)){
			val = Math.floor(val);
			val++;
			$(this).prev().val(val);
		}else{
			$(this).prev().val(1);
		}
		_bookid =$(this).parent().parent().parent().prev().html();
		_booknum = $(this).prev().val();
		ajaxsendbooknum(_bookid,_booknum);
		totalmoney();
	});
	
	//改变文本框里面的内容
	$('#shopcar_list').on('focus','.shopcar_num',function(){
		$('#shopcar_list').on('keyup','.shopcar_num',function(){
			var val = $(this).val();
			if(isNaN(val)||val<=0){
				$(this).val('1');
			}
		});
	});
	
	

	//文本框失去焦点后将内容通过ajax的方式传送到数据库
	$('#shopcar_list').on('blur','input[type=text]',function(){
		var _bookid = $(this).parent().parent().parent().prev().html();
		var _booknum = $(this).val();
		ajaxsendbooknum(_bookid,_booknum);
		totalmoney();
	});
	
	
	//全选
	$('#selectall').click(function(){
		$('#shopcar_list').find('input[type=checkbox]').prop('checked',$(this).prop('checked'));
		totalmoney();
	});
	
	
	//单个删除指定的li
	$('#shopcar_list').on('click','.delbook',function(){
		shopcarnobook();
		$.ajax({
			url:'php/delbook.php',
			type:'post',
			data:{
				shopcarid:$(this).parent().parent().prev().prev().html(),
			},
			
		});
		$(this).parent().parent().remove();
		totalmoney();
	});
	
	//删除被勾选的li
	$('#deleall').click(function(){
		$.each($('input[class=bookitems]:checked'),function(){
				$.ajax({
				url:'php/delbook.php',
				type:'post',
				data:{
					shopcarid:$(this).parent().parent().prev().prev().html(),
				},
			});
		});
		$.each($('#shopcar_list input[type=checkbox]'),function(index,value){
			if($(this).is(':checked')){
				$(this).parent().parent().remove();
			};
		});
		shopcarnobook();
		totalmoney();
	});
	
	//结算
	$('input[type=submit]').click(function(){
		totalmoney();
	});
	
	
});
