/**
 * @author lujialu
 */
$(function(){
	// $.each($('title'),function(index,value){
		// alert(index+" | "+value);
	// });
	//设置标题
	$('title').html('图书-'+$('h2').html());
	
	//点击购物车
	clickshopcar();
	
	//点击我的订单
	clickorder();
	
	//购物车的数量约束
	$('.changnum:first').click(function(){
		var val = $('#book_content div div p input').val();
		if(!isNaN(val)&&val>=2){
			val = Math.floor(val);
			val--;
			$('#book_content div div p input[type=text]').val(val);
		}else{
			$('#book_content div div p input[type=text]').val(1);
		}
	});
	$('.changnum:last').click(function(){
		var val = $('#book_content div div p input[type=text]').val();
		if(!isNaN(val)){
			val = Math.floor(val);
			val++;
			$('#book_content div div p input[type=text]').val(val);
		}else{
			$('#book_content div div p input').val(1);
		}
	});
	
	$('#book_content div div p input[type=text]').focus(function(){
		$(this).keyup(function(){
			var val = $(this).val();
			if(isNaN(val)||val<=0){
				$(this).val('1');
			}
		});
	});
	
	
	
	//图书信息选项卡
    $( "#book_tabs" ).tabs({
    	 event: "mouseover",
    	 heightStyle: "fill",
    	 
    });
    
    //添加页面的赞（有用）
    $('#book_tabs2').on('click','.praise',function(){
    	$(this).hide();
    	var  _this = this;
    	var praise = Number(this.innerHTML.substring(3,this.innerHTML.length-1));
    	praise++;
    	//alert($(this).parent().html());

    	$.ajax({
    		url:'php/bookaddpraise.php',
    		type:'post',
    		data:{
    			comment_praise:praise,
    			comment_id:$(this).parent().parent().find('.getid').html(),
    		},
    		success:function(response,status,xhr){
    			if(response=='success'){
    			$(_this).text("有用("+praise+")");
    			$(_this).show();
    			}
    		}
    	});

    	
    });
    
    //加入购物车
    $('#addshopcar').click(function(){
    	if(!$.cookie('user')){
    		$('#error').dialog('open');
    		setTimeout(function(){
    			$('#error').dialog('close');
    			$('#login').dialog('open');
    		},1000);
    	}else{
    		$('#sucadd').dialog({
	    		modal : true,
				closeOnEscape : false, //按下esc 无效
				resizable : false,
				draggable : false,
				width : 250,
				height: 80,
    		}).parent().find('.ui-widget-header').hide();;
	    	$.ajax({
	    		url:"php/addtocar.php",
	    		type:'post',
	    		data:{
	    			bookid:$(".getbookid").html(),
	    			booknum:$("#booknum").val(),
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
