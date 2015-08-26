$(function(){
	$('#publish').click(function(){
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
		$('.showContent').html(s);
		  
		});

});