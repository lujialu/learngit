<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>heool</title>
</head>
<body>

<script type="text/javascript">
	document.write('<?php echo 1?>');
	$.ajax({
		url:"index.php",
		type:'post/get',
		data:{},
		success:function(response,status,xhr){
			
		}
		
	});
</script>

</body>
</html>