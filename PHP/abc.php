<html>
<body>
<?php
//$city=array("lucknow","kanpur","agra","gorakhpur");
$city=array("up1"=>"lucknow","up2"=>"kanpur","up3"=>"agra","up4"=>"gorakhpur");
/*$city=array();
$city[0]="lucknow";
$city[1]="kanpur";*/
/*for($i=0;$i<4;++$i)
{
	echo $city[$i]."<br>";
}*/
$n=count($city);
//sort($city);
//rsort($city);
//asort($city);
arsort($city);
echo  "<br>Total Size=".$n."<br>";
foreach($city as $myv)
{
 echo $myv."<br>";
}
echo "<pre>";
print_r($city);
echo "</pre>";
?>
</body>
</html>