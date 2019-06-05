<!DOCTYPE html>
<html>
<head>
	<title>masih bingung</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	    body{
	background: #F2F2F2;
	font-family: sans-serif;
}

.h{
	width: 335px;
	background: #2F495A;
	margin: 100px auto;
	padding: 10px 20px 50px 20px;
	border-radius: 5px;
	box-shadow: 0px 10px 20px 0px #D1D1D1;
}

.bil{
	width: 300px;
	margin: 5px;
	border: none;
	font-size: 16pt;
	border-radius: 5px;
	padding: 10px;	
}

.opt{
	font-size: 16pt;
	border: none;
	width: 215px;
	margin: 5px;
	border-radius: 5px;
	padding: 10px;
}

.tombol{
	background: #EC5159;
	border-top: none;
	border-right: none;
	border-left: none;
	border-radius: 5px;
	padding: 10px 20px;
	color: #eee;
	font-size: 15pt;
	border-bottom:4px solid #BF3D3D;
}

.brand{
	color: #eee;
	font-size: 11pt;
	float: right;
	text-decoration: none;
	margin: 12px;
}

.judul{
	text-align: center;
	color: #eee;
	font-weight: normal;
}
	</style>
</head>
<body>
	<div class="h">
		<h2 class="judul">IES dork generator v2</h2>
		<form method="post" action="">	
		<select class="opt" name="operasi">
		<option value="dc">dork sql</option>
		<option value="db">dork bypass admin</option>
		<option value="c">comingsoon</option>
		<option value="c">comingsoon</option>
	</select>
			<input type="text" name="nama" class="bil" autocomplete="off" placeholder="shop">
			<input type="text" name="ext" class="bil" autocomplete="off" placeholder="php">
			<input type='text' name='id' class='bil' placeholder='com'>
		<center>	<input type="submit" name="submit" class='tombol' value="submit" >	</center>						
		</form>
		
	</div>
	<?php 
if(isset($_POST['submit'])){
	$nama = $_POST['nama'];
	$ext = $_POST['ext'];
	$id = $_POST['id'];
echo "\n$nama.$ext?id= site:$id\n";}
?>

</body>
</html>
