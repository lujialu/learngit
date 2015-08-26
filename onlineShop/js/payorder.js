/**
 * @author lujialu
 */
$(function(){
	//控制滚动条
	window.scrollTo(0,160);
	
	//计算每个订单的总价
	$.each($('.ordermoney'),function(index,value){
		$allmoney = Number(0);
		$.each($(this).parent().parent().find('.orderallprice'),function(){
			
			$allmoney+=Number($(this).html().substr(1));
		});
		
		$(this).html('总价：￥'+$allmoney.toFixed(2));
	});
	
	//计算总价
	function allmoney(){
		window.ordermoney = Number(0) ;
		$.each($('h4 span input[type=checkbox]:checked'),function(){
			window.ordermoney +=  Number($(this).parent().parent().find('.ordermoney').html().substr(4));
		});
		$('.allmoney').html('￥'+window.ordermoney);
	}
	
	
	allmoney();
});
