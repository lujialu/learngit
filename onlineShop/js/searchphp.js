/**
 * @author lujialu
 */
$(function(){
	//引入func.js
	
	
	//search.php点击收起|展开高级搜索
	$('#shouqihexianshi').click(function(){
		if($('#search-content').is(':hidden')){
			$(this).val('收起高级搜索');
		}else{
			$(this).val('展开高级搜索');
		}
		$('#search-content').toggle(800);
		
	});
	
	
	//search.php点击当前按钮字体变红，其他按钮字体变白
	$('#sortastype input[type=button]').click(function(){
		$('#sortastype input[type=button]').css('color','white');
		$(this).css('color','red');
	});
	
	
	//search.php点击默认进行排序
		showbooks('php/search_mysql.php',1);
	
	//数字分页动态加载图书内容
	$('#fenye').on('click','.pagenum',function(){
		currentpage = $(this).text();
		showbooks('php/search_mysql.php',currentpage);
		window.scrollTo(0,350);		
		
	});
	
	//上一页
	$('#fenye').on('click','#prevpage',function(){
		if(typeof(currentpage)=='undefined'){
			currentpage=1;
		}
		currentpage--;
		if(currentpage<=0){
			currentpage=1;
		}
		showbooks('php/search_mysql.php',currentpage);
	});
	
	//下一页
	$('#fenye').on('click','#nextpage',function(){
		if(typeof(currentpage)=='undefined'){
			currentpage=1;
		}
		currentpage++;
		if(currentpage>$('.pagenum').length){
			currentpage=$('.pagenum').length;
		}
		showbooks('php/search_mysql.php',currentpage);
	});
	
	//指定页码
	$('#fenye').on('click','#confirmIt',function(){
		var pageContent = $('#pagenum').val();
		if(isNaN(pageContent)||pageContent<0){
			pageContent=1;
		}else{
			pageContent = Math.floor(pageContent);
			if(pageContent>$('.pagenum').length){
				pageContent=$('.pagenum').length;
			}
		}
		currentpage = pageContent;
		showbooks('php/search_mysql.php',currentpage);
		$('#pagenum').val("");
	});
	
	
	
	
	$('#searchButton').click(function(){
		var regx = /^\s*$/;
		if(regx.test($('#bookname').val())&&regx.test($('#author').val())&&regx.test($('#publishplace').val())&&regx.test($('#type').val())){
			return false;
		}
		$.ajax({
			url:'php/search_mysql.php',
			type:'post',
			data:{
				book_name:$('#book_name').val(),
				book_authod:$('#book_authod').val(),
				book_press:$('#book_press').val(),
				book_small_type:$('#book_small_type').val(),
				//book_discount:$('#discount').val(),
				//book_price:$('#price').val(),
			},
			success:function(response,status,xhr){
				$('#search-result').html('');
				var html = '';
				var json = $.parseJSON(response);
				$.each(json,function(key,value){
					var havegoods = '';
					if(value.book_amount!=0){
						havegoods = '有货';
					}else{
						havegoods = '无货';
					}
					var nowprice =(value.book_oriprice*value.book_discount).toFixed(2);
					html+='<div><img style="width:160px;height:160px;" src="'+value.book_img_address+'" alt="图片"/><div><h3><a name = "'+value.book_id+'"href="book.php?id='+value.book_id+'">'+
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
	});	
	
	//search.php加入购物车按钮动态绑定事件
	$('#search-result').on('click','.addtoshopcar',function(){
		if($(this).parent().find('.ishasgoods').html()=='无货'){
			return false;
		}else{
			$('#sucadd').dialog({
	    		modal : true,
				closeOnEscape : false, //按下esc 无效
				resizable : false,
				draggable : false,
				width : 250,
				height: 70,
    		}).parent().find('.ui-widget-header').hide();
	    	$.ajax({
	    		url:"php/addtocar.php",
	    		type:'post',
	    		data:{
	    			bookid:$(this).parent().parent().parent().find('h3 a').prop('name'),
	    			booknum:1,
	    		},
	    		success:function(response,status,xhr){
	    			if(response=='success'){
		    			$('#sucadd').html('<h3>(~^O^~) 成功加入购物车！</h3>');
	    			}else{
	    				$('#sucadd').html('<h3>(~〒_〒~)加入购物车失败！</h3>');
	    			}
	    			setTimeout(function(){
	    				$('#sucadd').dialog('close');
	    				$('#sucadd').html('<h3>(～￣▽￣)～ 正在加入购物车...</h3>');
	    			},1000);
	    		},
	    	});
		}
	});
		
	
});
