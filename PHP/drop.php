<html>
<head>
<script>
function abc(v)
{
  self.location="drop.php?cntry="+v;
}
</script>
</head>
<body>
<?
$country=array("INDIA","CHINA","JAPAN");
$state=array("INDIA"=>array("UP","MP","BIHAR"),
			 "CHINA"=>array("CP","CP2","BIHAR2"),
			 "JAPAN"=>array("UP3","MP3","BIHAR3"));
$cntry="";
if(isset($_GET['cntry']))
{
	$cntry=$_GET['cntry'];
}

?>
<form >
Select Country<select name="cnt" Onchange="abc(this.value)">
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
<select name="sta">
		<option value=" ">Select a Value</option>
		<?
		if(isset($_GET['cntry']))
		{
		  $v=$state[$cntry];
		  foreach($v as $data)
			{
			echo "<option value='$data'>".$data."</option>";
		  }
		}
		?>
	</select>

</form>
</body>
</html>