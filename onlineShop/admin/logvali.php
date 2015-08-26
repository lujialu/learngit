<?php
    if(trim($_POST['admin'])=='admin'&&trim($_POST['psw'])=='1'){
		header('Location:mana.php');
    }else{
		header('Location:adminlogin.php');
    }
?>