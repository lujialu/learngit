/**
 * @author lujialu
 */
$(function(){
	//设置tab
	$("#tabs").tabs();
	
	//点击隐藏显示
	$('#tabs h3').click(function(){
		$(this).next().toggle(600);
	});
	
	//开始默认点击
	$.each($('#tabs h3'),function(){
		$(this).trigger('click');
	});
	
	//日历插件
	$('#sheltime').datepicker({
		dateFormat:'yy-mm-dd',
		dayNames : ['星期日','星期一','星期二','星期三','星期四','星期五','星期六'],
		dayNamesShort : ['星期日','星期一','星期二','星期三','星期四','星期五','星期六'],
		dayNamesMin : ['日','一','二','三','四','五','六'],
		monthNames : ['一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月'],
		monthNamesShort : ['一','二','三','四','五','六','七','八','九','十','十一','十二'],
		altField : '#abc',
		altFormat : 'yy-mm-dd',
		appendText : '(yy-mm-dd)',
		firstDay : 1,
	});
	
	//隐藏日历提醒文字
	$('#sheltime').next().hide();
	
	//设置下拉框样式
	$('select').width(100);
	
	
	
	/*
	 * tipdialog:弹出框函数
	 * @param id 选择器
	 * @return void
	 */
	function tipdialog(id){
		$(id).dialog({
			modal : true,
			resizable : false,
			draggable : false,
			autoOpen : false,
			closeOnEscape : false,
			width : 250,
			height: 100,
		});
	}
	
	
	//添加书本：构建添加图书对话框
	tipdialog('#addbookdialog');
	
	//修改书本：构建修改图书对话框
	tipdialog('#alterbookdialog');
	
	
	//添加书本：点击提交将书本数据传输到数据库
	$('#bookinfo').validate({
		submitHandler:function(form){
			$(form).ajaxSubmit({
				url : 'addbook.php', //设置提交的url，可覆盖action 属性
				type : 'POST', //GET,POST
				dataType : null, //xml,json,script，默认为null
				beforeSubmit:function(){
					$('#addbookdialog').dialog('open');
				},
				success:function(response){
					if(response=='1success'){
						setTimeout(function(){
							$('#addbookdialog').html('<h5>ヾ(。◕ฺ∀◕ฺ)ノ添加成功</h5>');
							$('#bookinfo').resetForm();
						},1000);	
					}else{
						setTimeout(function(){
							$('#addbookdialog').html('<h5> ∑( ° △ °|||)︴ 添加失败</h5>');
						},1000);
					}
					setTimeout(function(){
						$('#addbookdialog').dialog('close');
					},3000);
				},
				error:function(response){
					alert('提交文件发生错误');
				},
			});
			$('#addbookdialog').html('<h5> (｡◕ˇ∀ˇ◕）努力添加中...</h5>');
		},
		//wrapper:'span',
		highlight:function(element, errorClass){
			$(element).css('box-shadow','1px 1px 10px #DE5E25');
			
		},
		unhighlight:function(element,errorClass){
			$(element).css('box-shadow','none');
		},
		
		rules:{
			bookname:{
				required:true,
			},
			authod:{
				required:true,
			},
			sheltime:{
				required:true,
				date:true,
			},
			press:{
				required:true,
			},
			amount:{
				required:true,
				digits:true ,
			},
			bookimg:{
				required:true,
			},
			price:{
				required:true,
				number:true,
				min:0,
			},
			discount:{
				required:true,
				number:'请输入数字',
				range:[0,1],
			},
			intro:{
				rangelength:[10,200],
			},
			
		},
		messages:{
			bookname:{
				required:'请填写图书的名称',
			},
			authod:{
				required:'请填写作者',
			},
			sheltime:{
				required:'请填写出版时间',
			},
			press:{
				required:'请填写出版社',
			},
			amount:{
				required:'请填写图书数量',
				digits:'请填入正整数',
			},
			bookimg:{
				required:'请上传图书图片',
			},
			price:{
				required:'请填写图书原价',
				number:'请输入数字',
				min:'最小值不能小于{0}',
			},
			discount:{
				required:'请填写图书折扣',
				number:'请输入数字',
				range:'请填写{0}到{1}之间的数字',
			},
			intro:{
				rangelength:'请不要小于10或者多于200个字',
			},
		},
		
	});
	
	//修改书籍：失去焦点导入书本信息
	$('#bookname').blur(function(){
		if(trim($(this).val())){
		$('#alert_bookinfo').show(500);
			$.ajax({
				url:'alertbook.php',
				type:'post',
				dataType:'json',
				data:{
					bkname:trim($(this).val()),
				},
				success:function(response,status,xhr){
					$('#alert_bookinfo input[name=bookid]').val(response.book_id);
					$('#alert_bookinfo input[name=bookname]').val(response.book_name);
					$('#alert_bookinfo input[name=authod]').val(response.book_authod);
					$('#alert_bookinfo input[name=bigtype]').val(response.book_big_type);
					$('#alert_bookinfo input[name=smalltype]').val(response.book_small);
					$('#alert_bookinfo input[name=sheltime]').val(response.book_sheltime);
					$('#alert_bookinfo input[name=press]').val(response.book_press);
					$('#alert_bookinfo input[name=amount]').val(response.book_amount);
					//$('#alert_bookinfo input[name=bookimg]').val(response.book_img_address);
					$('#alert_bookinfo input[name=price]').val(response.book_oriprice);
					$('#alert_bookinfo input[name=discount]').val(response.book_discount);
					$('#alert_bookinfo textarea[name=intro]').val(response.book_Introduction);
					
				},
			});
		}
	});
	//修改书籍：取消修改
	$('#cancelalter').click(function(){
		$('#alert_bookinfo').hide(300);
	});
	
	//修改书籍：验证字段
	$('#alert_bookinfo').validate({
		submitHandler:function(form){
			$(form).ajaxSubmit({
				url : 'updatebook.php', //设置提交的url，可覆盖action 属性
				type : 'POST', //GET,POST
				data:{
					bookid:$('#alert_bookinfo input[name=bookid]').val(),
				},
				dataType : null, //xml,json,script，默认为null
				beforeSubmit:function(){
					$('#alterbookdialog').dialog('open');
				},
				success:function(response){
					if(response=='success'){
						setTimeout(function(){
							$('#alterbookdialog').html('<h5>ヾ(。◕ฺ∀◕ฺ)ノ修改成功</h5>');
							$('#alert_bookinfo').resetForm();
						},1000);	
					}else{
						setTimeout(function(){
							$('#alterbookdialog').html('<h5> ∑( ° △ °|||)︴ 修改失败</h5>');
						},1000);
					}
					setTimeout(function(){
						$('#alterbookdialog').dialog('close');
					},3000);
				},
				error:function(response){
					alert('修改文件发生错误');
				},
			});
			$('#alterbookdialog').html('<h5>(｡◕ˇ∀ˇ◕)努力修改中...</h5>');
		},
		//wrapper:'span',
		highlight:function(element, errorClass){
			$(element).css('box-shadow','1px 1px 10px #DE5E25');
			
		},
		unhighlight:function(element,errorClass){
			$(element).css('box-shadow','none');
		},
		
		rules:{
			bookname:{
				required:true,
			},
			authod:{
				required:true,
			},
			sheltime:{
				required:true,
				date:true,
			},
			press:{
				required:true,
			},
			amount:{
				required:true,
				digits:true ,
			},
			price:{
				required:true,
				number:true,
				min:0,
			},
			discount:{
				required:true,
				number:'请输入数字',
				range:[0,1],
			},
			intro:{
				rangelength:[10,200],
			},
			
		},
		messages:{
			bookname:{
				required:'请填写图书的名称',
			},
			authod:{
				required:'请填写作者',
			},
			sheltime:{
				required:'请填写出版时间',
			},
			press:{
				required:'请填写出版社',
			},
			amount:{
				required:'请填写图书数量',
				digits:'请填入正整数',
			},
			price:{
				required:'请填写图书原价',
				number:'请输入数字',
				min:'最小值不能小于{0}',
			},
			discount:{
				required:'请填写图书折扣',
				number:'请输入数字',
				range:'请填写{0}到{1}之间的数字',
			},
			intro:{
				rangelength:'请不要小于10或者多于200个字',
			},
		},
		
	});
	
	
	
	
});
