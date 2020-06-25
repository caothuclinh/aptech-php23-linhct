<?php 
session_start();
	if(isset($_SESSION['ten']) && isset($_SESSION['pass'])):?>
		<h2>ten dang nhap la: <?=$_SESSION['ten']?></h2>
		<h2>mat khau la: <?=$_SESSION['pass']?></h2>
<?php endif ?>
<?php if((isset($_SESSION['ten'])== "") && (isset($_SESSION['pass'])== "")):?>
	<h2>session khong ton tai</h2>
<?php endif ?>
<a href="session.php">tro ve</a> | <a href="delete.php">huy section</a>
