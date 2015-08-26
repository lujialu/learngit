$(function(){
	
	//显示留言开始
	
	$.ajax({
		url:'php/liuyanban.php',
		type:'post',
		success:function(response,status,xhr){
			$('.comment_load').hide();
			var json = $.parseJSON(response);
			var count = 0;
			
			$.each(json,function(index,value){
				count = value.count;
				$('.showContent').append('<div class = LittleContent><span class = ContentUser>'+value.user_name+'</span>:'+value.content+"</div>");
			});
			$('.showContent').append('<span class = load_more>加载更多留言</span>');
			var page = 2;
			if(page > count){
				$('.load_more').off('click');
				$('.load_more').hide();
			}
			$('.load_more').button().on('click',function(){
				$('.load_more').button('disable');
				$.ajax({
					url:'php/liuyanban.php',
					type:'post',
					data:{
						page:page,
					},
					beforeSend:function(jqXHR,settings){
						$('.load_more').html('<img src="image/more_load.gif" />');
					},
					success:function(response,status){
						var json_more = $.parseJSON(response);
						$.each(json_more,function(index,value){
							$('.LittleContent').last().after('<div class = LittleContent><span class = ContentUser>'+value.user_name+'</span>:'+value.content+"</div>");
						});
						$('.load_more').button('enable');
						$('.load_more').html('加载更多留言');
						page++;
						if(page > count){
							$('.load_more').hide();
						}
					},
				});
			});
		},
	});
	
	//显示留言结束
	
	
	$('#publish').button().click(function(){
		
		if($.cookie('user')){
			var s = $('textarea').val();
			var s2 = '';
			var regx = new RegExp(/\[\w+\]/g);
		  	var a = s.match(regx) ;
		  	var bb = {};
		  	for(i=0;i<83;i++){
			    var aaai = 'aaa'+i;
			    var bbbi = 'bbb'+i;
			    var ccci = 'ccc'+i;
			    var dddi = 'ddd'+i;
			    var prea = "<img src = 'images/mr/";
			    var preb = "<img src = 'images/gnl/";
			    var prec = "<img src = 'images/lxh/";
			    var pred = "<img src = 'images/bzmh/";
			    var last = ".gif'/>";
			  	bb[aaai] = prea+i+last;
			  	bb[bbbi] = preb+i+last;
			  	bb[ccci] = prec+i+last;
			  	bb[dddi] = pred+i+last;
		      }
			  for(var t in a){
			  	var regx2 = new RegExp(/\w+/);
			  	at = a[t].match(regx2);
				s = s.replace(a[t],bb[at]);
			  }
			if(s.length>=5){
				$('.showContent').prepend('<div class = LittleContent><span class = ContentUser>'+$.cookie('user')+'</span>:'+s+"</div>");
				$(this).ajaxSubmit({
					url:'php/addluyanban.php',
					type:'post',
					data:{
						user:$.cookie('user'),
						content:s,
					},
					beforeSubmit:function(formData,jqForm,options){
						$('#loading').dialog('open');
						$('#content').find('button').eq(0).button('disable');
					},
					success:function(responseText,statusText){
						if(responseText){
							$('#content').find('button').eq(0).button('enable');
							$('#loading').css('background','url(image/success.gif) no-repeat 20px center').html('留言新增成功...');
							setTimeout(function(){
								$('#loading').dialog('close');
								$('#loading').css('background', 'url(image/loading.gif) no-repeat 20px center').html('数据交互中...');
							},1000);
							
						}
					},
				});
			} 
			
			$('textarea').val('');  
		}else{
			$('#error').dialog('open');
			setTimeout(function(){
				$('#error').dialog('close');
				$('#login').dialog('open');
			},1000);
		}
		
		
		});
		
		
		

});