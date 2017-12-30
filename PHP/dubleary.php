<html>
<body>
<?php
$city=array("UP"=>array("LKO","KAN","AGRA"),
			"BIHAR"=>array("LKO1","KAN1","AGRA1"),
			"MP"=>array("LKO2","KAN2","AGRA2"));
/*
$city=array(array("LKO","KAN","AGRA"),
			array("LKO1","KAN1","AGRA1"),
			array("LKO2","KAN2","AGRA2"));
*/
/*ECHO"<pre>";
print_r($city);
ECHO"</pre>";
*/
/*
for($i=0;$i<3;++$i)
{
	for($j=0;$j<3;++$j)
	{
		echo $city[$i][$j]."..";
	}
	echo"<br>";
}*/
/*foreach($city as $row)
{
	foreach($row as $col)
	{
		echo $col."   ";
	}
	echo "<br>";
}*/
foreach($city as $row=>$v)
{	
	foreach($v as $data)
	{
		echo $row."=".$data."<br>";
	}
}

?>
</body>
</html>