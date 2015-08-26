/**
 * @author lujialu
 */
$(function(){
	
	
	//点击购物车
	clickshopcar();
	
	//点击我的订单
	clickorder();
	
	
	//创建录入地址对话框
	$('#gettingadd').dialog({
		width:200,
		height:30,
		autoOpen:false,
		modal : true,
		resizable : false,
		draggable : false,
	}).parent().parent().find('.ui-widget-header').hide();
	
	//录入地址1秒
	function getaddress(){
		$('#gettingadd').dialog('open');
		setTimeout(function(){
			$('#gettingadd').dialog('close');
		},2500);
	}
	
	
	
	//将地址从数据库里面显示出来
	function showaddress(){
		$.ajax({
			url:'php/showaddress.php',
			type:'post',
			dataType:'json',
			success:function(response,status,xhr){
				if(response!=''){
					$('#order_address').find('h5').html('');
					$('#order_address').find('#order_other_address').html('');
					$('#order_address').find('h5').html('<ul><span class="addressid" style="display:none">'+response[0].address_id+'</span><li class="otheradd">默认地址</li><li class="receiver">'+response[0].address_receiver+'</li><li class = "area">'+response[0].address_area+'</li><li class="full_area">'+response[0].address_full+'</li><li class="address_phone">'+response[0].address_phone+'</li><span  class="edit">编辑</span><span class="deladdress">删除</span></ul>');
				}
				
				for(var i = 1;i<response.length;i++){
					$('#order_address').find('#order_other_address').append('<ul><span class="addressid" style="display:none">'+response[i].address_id+'</span><li class="otheradd">其他地址</li><li class="receiver">'+response[i].address_receiver+'</li><li class = "area">'+response[i].address_area+'</li><li class="full_area">'+response[i].address_full+'</li><li class="address_phone">'+response[i].address_phone+'</li><span class="edit">编辑</span><span class="deladdress">删除</span></ul>');
				}
			},
		});
	}
	
	
	//若发货清单为空，则：
	function emptylist(){
		if($('#order_goods li').html()==undefined){
			$('#order_goods').html('<p style="color: #888; font-size: 19px;font-weight: bold;height: 35px;line-height: 35px;padding: 32px 0 0 163px;">╭(′▽`)╭(′▽`)╯亲！您还没有订单哦，快去下单吧！</p>');
		}
	}
	emptylist();
	
	
	//将地址信息显示出来
	showaddress();
	
	//将滚动条放置到指定位置
	window.scrollTo(0,160);		
	
	
	//显示|收起更多地址
	$('#packup').click(function(){
		$('#order_other_address').toggle(300);
		if($(this).html()=='更多地址↓'){
			$(this).html('收起地址↑');
		}else{
			$(this).html('更多地址↓');
		}
	});
	
	//开始默认点击 收起地址
	$('#packup').trigger('click');
	
	
	//点击地址 替换
	$('#order_address').on('click','#order_other_address ul .otheradd',function(){
		//showaddress();
		var orihtml = $('#order_address').find('h5').find('ul').html();
		// showaddress();
		$('#order_address').find('h5').find('ul').html($(this).parent().html());
		$('#packup').trigger('click');
		$(this).parent().html(orihtml);
		
	});
	
	//点击修改收货地址弹出地址框
	$('#addaddress').dialog({
		width:650,
		autoOpen:false,
		modal : true,
		resizable : false,
		draggable : false,
	}).parent().parent().find('.ui-widget-header').hide();
	
	
	$('#addnewaddress').click(function(){
		$('#addaddress').dialog('open');
		$.each($('#newadd input[type=text]'),function(index,value){
			$(this).val('');
		});
		$('#newadd').hide();
		$('#newadd').show(500);
	});
	
	//点击关闭地址框
	$('#closedialog').click(function(){
		$('#addaddress').dialog('close');
		$.each($('#newadd input[type=text]'),function(index,value){
			$(this).next().hide();
		});
	});
	
	//验证地址字段并传送到数据库	
	$('#save').click(function(){
		window.boolIt = true;
		$.each($('#newadd input[type=text]'),function(index,value){
			if(trim($(this).val())==''){
				window.boolIt = false;
				$(this).next().show();
			}else{
				$(this).next().hide();
			}
		});
		//验证成功
		if(window.boolIt){
				$.ajax({
					url:'php/addaddress.php',
					type:'post',
					data:$('#newadd form').serialize(),
				});
				showaddress();
				$('#addaddress').dialog('close');
			}
			
		
	});
	
	
	//删除地址
	$('#order_address').on('click','.deladdress',function(){
		//alert($(this).parent().html());
		$(this).parent().remove();
		$.ajax({
			url:'php/deladdress.php',
			type:'post',
			data:{
				address_id:$(this).parent().find('.addressid').html(),
			},
			success:function(response,status,xhr){
				
			}
			
		});
	});
	
	//编辑地址
	$('#order_address').on('click',".edit",function(){
		alert('功能暂未实现');
	});
	
	//提交订单
	//创建提交订单对话框
	$('#submitorder').dialog({
		width:200,
		height:30,
		autoOpen:false,
		modal : true,
		resizable : false,
		draggable : false,
	}).parent().parent().find('.ui-widget-header').hide();
	
	$('#commitorder').click(function(){
		$('#submitorder').dialog('open');
		$orderbookid = '';
		if($('.getbookid')){
			$.each($('.getbookid'),function(index,value){
				$num =  $(this).parent().find('.getnum').html().substr(1);
				$orderbookid+=$(value).html()+'|'+$num+',';
			});
			$orderbookid = $orderbookid.substr(0,$orderbookid.length-1);
			//alert($orderbookid);
			$ordermoney = $('#paymoney').html().substr(1);
			var addressInfo = $('#order_address h5 .receiver').html()+','+$('#order_address h5 .area').text()+','+$('#order_address h5 .full_area').text()+','+$('#order_address h5 .address_phone').text();
			$.ajax({
				url:'php/submitorder.php',
				type:'post',
				data:{
					order_address:addressInfo,
					order_payway:$('input[type=radio]:checked').val(),
					order_money:$ordermoney,
					order_book_id:$orderbookid,
				},
				success:function(response,status,xhr){
					if(response=='success'){
						setTimeout(function(){
							$('#submitorder p').text('<(￣︶￣)>提交订单成功');
						},1000);
						setTimeout(function(){
							$('#submitorder').dialog('close');
						},2000);
						window.location.href = 'payorder.php';
						
					}else{
						setTimeout(function(){
							$('#submitorder p').text('o(╥﹏╥)o提交订单失败');
						},3000);
						setTimeout(function(){
							$('#submitorder').dialog('close');
						},2000);
					}
				},
			});
		}
		
		$('#submitorder p').html('<p style="padding-left: 20px">b（￣▽￣）d提交订单中...</p>');
	});
	
	
});
