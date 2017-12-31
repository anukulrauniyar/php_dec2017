<html>
<head>
<script>
function abc(v)
{
  self.location="drop.php?cntry="+v;
}
function abcd(s)
{
  var v=document.getElementById("cn").value;
  self.location="drop.php?cntry="+v+"&stat="+s;
}
</script>
</head>
<body>
<?
$country=array("INDIA","CHINA","JAPAN");
$state=array("INDIA"=>array("UP","MP","BIHAR"),
			 "CHINA"=>array("CP","CP2","BIHAR2"),
			 "JAPAN"=>array("UP3","MP3","BIHAR3"));
$city=array("UP"=>array("UP-C","UP-D","UP-E"),
			 "CP"=>array("CP-C","CP-D","CP-E"),
			 "MP3"=>array("MP-C","MP-D","MP-E"));

$cntry="";
$stat="";
if(isset($_GET['cntry']))
{
	$cntry=$_GET['cntry'];
}
if(isset($_GET['stat']))
{
	$stat=$_GET['stat'];
}

?>
<form >
Select Country<select name="cnt" Onchange="abc(this.value)" id="cn">
		<option value=" ">Select a Value</option>
		<?
		foreach($country as $v)
		{
		 echo "<option value='$v' ";
		 if($cntry==$v)
			 echo" SELECTED " ;
		 echo " >".$v."</option>";
		}
		?>
	</select><br>
Select State
<select name="sta" Onchange="abcd(this.value)">
		<option value=" ">Select a Value</option>
		<?
		if(isset($_GET['cntry']))
		{
		  $v=$state[$cntry];
		  foreach($v as $data)
			{
			echo "<option value='$data' ";
		 if($stat==$data)
			 echo" SELECTED " ;
		 echo " >".$data."</option>";
		  }
		}
		?>
	</select>
	<br>
Select State
<select name="city">
		<option value=" ">Select a Value</option>
		<?
		if(isset($_GET['stat']))
		{
		  $v=$city[$stat];
		  foreach($v as $data)
			{
			echo "<option value='$data' ";
			echo " >".$data."</option>";
		  }
		}
		?>
	</select>

</form>
</body>
</html>