<?php
	include 'data.php';
	
	
	// $row = mysqli_fetch_assoc($query);
	$i=0;
	?>
	<style>
		*{
			color: #7f32d6;
			font-size: 20px;
		}
		body{
			margin-left: 100px;
			margin-top: 50px;
		}
		.title{
			font-weight: bold;
			color: darkred;
			font-size: 30px;
		}
		a{
			color: orange;
			font-weight: bold;
			text-decoration: none;
		}
		.fix{
			position: absolute;top: 10px;
			left: 10px;
		}
	</style>
		<p class="title"> danh sach nguoi dung</p>
		<div>
			<form method="get">
				<input type="text" placeholder="search" name="search">
				<input type="submit" value="search" name="ok">
			</form>
		</div>
		<?php 
			if (isset($_GET['ok'])) {
				if (!empty($_GET['search'])) {
					# code...
					$search = $_GET['search'];
					$select = "SELECT * FROM users WHERE user like  '%$search%' OR email like '%$search%'";
				}
				# code...
				else{
					header('location:index.php');
				}
				
			}
			else{
				$select = "SELECT * FROM users  ORDER BY user ASC";
			}
			$query = mysqli_query($conn, $select);
		 ?>
	<table border="1" cellpadding="10">
		<thead>
			<tr>
				<th>STT</th>
				<th>id</th>
				<th>user</th>
				<th>email</th>
				<th colspan="2">truy van</th>
			</tr>
		</thead>
		<tbody>
		<?php
			while($r = mysqli_fetch_assoc($query)){
			$i++;
			$id_user = $r['id_user'];
			$name = $r['user'];
			$email = $r['email'];
		?>
			<tr>
				<td><?=$i?></td>
				<td><?=$id_user?></td>
				<td><?=$name?></td>
				<td><?=$email?></td>
				<td><a href = "update.php?id=<?=$id_user?>">update</a></td>
				<td><a href="delete.php?id=<?=$id_user?>">delete</a></td>
			</tr>
			<?php
	}
	// mysqli_close($conn);
 ?>
 
		</tbody>
	</table>
	<p class="fix"><a href="insert.php">them du lieu </a> || <a href="index.php">trang chu</a></p>

	
