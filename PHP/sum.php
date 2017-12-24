<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	//if(isset($_POST['cmd']))
	if(!empty($_POST['cmd']))
	{
	$n=$_POST['t1'];
	$n2=$_POST['t3'];
	$s=$n+$n2;	
	echo "Sum=".$s;
	}
	?>
<body>
<form method="post">
<table>
	<tr>
		<td>Number1</td>
		<td><input type="text" name="t1"></td>
	</tr>
	<tr>
		<td>Number2</td>
		<td><input type="text" name="t3"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="Sum" name="cmd"></td>
	</tr>
</table>
</form>
</body>
</html>