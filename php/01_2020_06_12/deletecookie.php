<?php 
	setcookie('user',$_POST['user'],time()-15);
	setcookie('pass',$_POST['pass'],time()-15);
	header("location: showcookie.php");