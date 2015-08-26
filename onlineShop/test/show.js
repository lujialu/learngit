/**
 * @author lujialu
 */
$(function(){
	$.each($('.content'),function(index,value){
		// alert(value+$(value).html());
		$(value).click(function(){
			$(value).html("<p class = 'pp'>hello</p>");
		});
	});
	
	$.each($('.content'),function(index,value){
		$(this).on('click','.pp',function()
		{
			alert(1);
		});
	});
});
