/**
 * @author lujialu
 */

$(function(){
	//点击购物车
	clickshopcar();
	//点击我的订单
	clickorder();
	
	$('.register').click(function(){
		 $('#reg').dialog('open');
	});
	
	
	//登录注册 cookies处理
	$('.member, .logout').hide();
	
		if ($.cookie('user')) {
		$('.member, .logout').show();
		$('.register, .login').hide();
		$('.member').html($.cookie('user'));
	} else {
		$('.member, .logout').hide();
		$('.register, .login').show();
	}
	
	$('.logout').click(function () {
		$.removeCookie('user');
		window.location.href = 'index.php';
	});
	
	//对话框显示数据操作中
	$('#loading').dialog({
	modal : true,
	resizable : false,
	draggable : false,
	autoOpen : false,
	closeOnEscape : false, //按下esc 无效
	width : 180,
	height: 50,
	}).parent().parent().find('.ui-widget-header').hide(); //去掉header 头
	
	
	//设置对话框
	$('#reg').dialog({
		autoOpen:false,
		closeText:'关闭',
		modal:true,
		title:'用户注册',
		width:380,
		height:470,
		resizable:false,
		buttons:{
			'提交':function(){
				$(this).submit();
			},
		},
	});
	
	//设置验证
	$('#reg').validate({
		submitHandler:function(form){
			//alert('验证完成,准备提交！');
			$(form).ajaxSubmit({
				url:'php/adduser.php',
				type:'post',
				beforeSubmit:function(formData,jqForm,options){
					$('#reg').dialog('widget').find('button').eq(1).button('disable');
					$('#loading').dialog('open');
				},
				success:function(responseText,statusText){
					$('#reg').dialog('widget').find('button').eq(1).button('enable');
					$('#loading').css('background', 'url(image/success.gif) no-repeat 20px center').html('数据提交成功...');
					$.cookie('user', $('#user').val());
					setTimeout(function () {
						$('#loading').dialog('close');
						$('#loading').css('background', 'url(image/loading.gif) no-repeat 20px center').html('数据交互中...');
						$('#reg').dialog('close');
						$('#reg').resetForm();
						$('#reg span.star').html('*').removeClass('success');
						$('.member, .logout').show();
						$('.register, .login').hide();
						$('.member').html($.cookie('user'));
						}, 1000);
					
				},
			});
		},
		
		highlight: function (element, errorClass) {
			$(element).css('border', '1px solid #C80A0D');
			$(element).parent().find('span.star').html('*').removeClass('succ');
		},
		unhighlight : function (element, errorClass) {
			$(element).css('border', '1px solid #ccc');
			$(element).parent().find('span.star').html('&nbsp;').addClass('succ');
		},
		
		showErrors:function(errorMap,errorList){
			
			this.defaultShowErrors();
		},
		wrapper:'li',
		rules:{
			user:{
				required:true,
				minlength:2,
				remote:{
					url:'../onlineShop/php/is_user.php',
					type:'post',
				},
			},
			pass:{
				required:true,
				minlength:6,
			},
			repass:{
				required:true,
				equalTo:'#pass',
			},
			email:{
				required:true,
				email:true,
			},
			phone:{
				required:true,
				rangelength:[11,11],
			},
			validNum:{
				required:true,
				rangelength:[4,4],
			},
			
		},
		
		messages:{
			user:{
				required:'账户不得为空！',
				minlength:'账户名不得小于{0}位',
				remote:'用户名已存在，请重新填写',
			},
			pass:{
				required:'密码不得为空！',
				minlength:'密码不得小于{0}位',
			},
			email:{
				required:'邮箱不得为空！',
				email:'请输入正确的邮箱格式！',
			},
			repass:{
				required:'请再次输入密码！',
				equalTo:'密码不一致！',
			},
			phone:{
				required:'手机号码不得为空',
				rangelength:'请填入{0}位手机号码'
			},
			validNum:{
				required:'请输入验证码',
				rangelength:'请填写正确的验证码',
			},
		
		},
		
	});
	
	
	
	
	//设置按钮格式
	$('#reg').buttonset();
	
	//设置提示
	$('#reg input[title]').tooltip();
	$('#user,#pass,#email,#phone').tooltip({
		position : {
		my : 'left center',
		at : 'right+5 center-1'
		},
	});
	
	//设置自动补全
	$('#email').autocomplete({
		autoFocus : true,
		delay : 0,
		source:function(request,response){
			var hosts = ['qq.com','163.com', '263.com', 'gmail.com', 'hotmail.com'],
				term = request.term,
				ix = term.indexOf('@'),
				name = term,
				host = '',
				result = [];
				
				result.push(term);
		        
		        if(ix>-1){
		        	name = term.slice(0,ix);
		        	host = term.slice(ix+1);
		        }
		        
		        if(name){
		        	var findedHosts = (host?$.grep(hosts,function(value,index){
		        		return value.indexOf(host)>-1;
		        	}):hosts),
		        		findedResults = $.map(findedHosts,function(value,index){
		        			return name+'@'+value;
		        		});
		        		
		        		result = result.concat(findedResults);
		        }
		        response(result);
		},
		
	});
	
	//设置登录对话框
	$('.login').click(function(){
		$('#login').dialog('open');
	});
	
	$('#login').dialog({
		autoOpen:false,
		modal:true,
		resizable:false,
		width:360,
		height:320,
		buttons:{
			'登录':function(){
				$(this).submit();
			}
		},
	}).validate({
		submitHandler:function(form){
			$(form).ajaxSubmit({
				url:'php/login.php',
				type:'post',
				beforeSubmit:function(formData,jqForm,options){
					$('#loading').dialog('open');
					$('#login').dialog('widget').find('button').eq(1).button('disable');
					
				},
				success:function(responseText,statusText){
					if(responseText){
						$('#login').dialog('widget').find('button').eq(1).button('enable');
						$('#loading').css('background','url(image/success.gif) no-repeat 20px center');
						if($('#expires').is(':checked')){
							$.cookie('user',$('#login_user').val(),{
								expires:7,
							});
						}else{
							$.cookie('user',$('#login_user').val());
						}
						
						setTimeout(function(){
							$('#loading').dialog('close');
							$('#login').dialog('close');
							$('#login').resetForm();
							$('login span.star').html('*').removeClass('succ');
							$('loading').css('background','url(image/loading.gif) no-repeat 20px center').html('数据交互中...');
							$('.member,.logout').show();
							$('.register,.login').hide();
							$('.member').html($.cookie('user'));
						},1000);

					}
				},
			});
			
		},
		
		highlight:function(element,errorClass){
			$(element).css('border','1px solid red');
			$(element).parent().find('span.star').html('*').removeClass('succ');
		},
		unhighlight:function(element,errorClass){
			$(element).css('border','1px solid #ccc');
			$(element).parent().find('span.star').html('&nbsp;').addClass('succ');
		},
		
		wrapper:'li',
		
		rules:{
			login_user:{
				required:true,
				minlength:2,
			},
			login_pass:{
				required:true,
				minlength:6,
				remote:{
					url:'php/login.php',
					type:'post',
					data:{
						login_user:function(){
							return $('#login_user').val();
						},
					},
				},
			},
		},
		messages:{
			login_user:{
				required:'账号不得为空!',
				minlength:'账号不得小于{0}位',
			},
			login_pass:{
				required:'密码不得为空!',
				minlength:'密码不得小于{0}位！',
				remote:'账号或者密码不正确!',
			},
		},
	});
	
	
	//图书选项卡
	$('#tabs').tabs({
		event:'mouseover',
		heightStyle:'auto',
	});
	//最热图书选项卡
	$('#hottabs').tabs({
		event:'mouseover',
		heightStyle:'auto',
	});
	
	//设置登录后操作
	$('#error').dialog({
		autoOpen:false,
		modal:true,
		closeOnEscape:false,
		resizable:false,
		draggable:false,
		width:180,
		height:50,
	}).parent().find('.ui-widget-header').hide();//把头部隐藏掉
	
	
	
	
	
});
